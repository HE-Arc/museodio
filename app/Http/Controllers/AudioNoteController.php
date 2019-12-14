<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\AudioNote;

/**
 * @group Audio note manager
 *
 * APIs for managing audio notes
 */
class AudioNoteController extends Controller
{
  /**
  * Size of the inner radius
  *
  * @var int
  */
  private $INNER_RADIUS = 0;

  /**
  * Returns all the audio notes
  *
  * [Returns all created audio notes recorded around the world]
  *
  */
  public function index(){
    return AudioNote::join('users', 'audio_notes.user_id', '=', 'users.id')
      ->select('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude', 'audio_notes.file_name')
      ->get();
  }


  /**
  * Saves an audio note
  *
  * [Returns a success message if the audio note was successfully saved]
  *
  */
  public function save(Request $request){
      $validator = Validator::make($request->all(), [
      'longitude' => 'required|numeric',
      'latitude' => 'required|numeric',
      'audio' => 'required|mimes:mpga,wav'
      ]);

      if($validator->fails()){
        return response()->json(['error' => $validator->errors(), 'test' => $request], 200);
      }

      $latitude = $request->latitude;
      $longitude = $request->longitude;
      $audio = $request->file('audio');

      $userid = Auth::id();
      $fileName = $userid . "_" . date("Y_m_d_H_i_s") . "." . $audio->getClientOriginalExtension();

      $request->audio->storeAs("audio", $fileName);

      $audioNote = new AudioNote();
      $audioNote->user_id = $userid;
      $audioNote->latitude = $latitude;
      $audioNote->longitude = $longitude;
      $audioNote->file_name = $fileName;

      $audioNote->save();

      return response()->json("Successfuly uploaded file", 200);
    }


    /**
    * Returns all the audio notes from the friends of the current user and near to the position of the current user
    *
    * [Returns the available audio notes]
    *
    */
    public function showNearAudioNotes(Request $request){
      $validatedData = $request->validate([
        'longitude' => 'required|numeric',
        'latitude' => 'required|numeric',
        'outer_radius' => 'numeric' // TODO we should define it
      ]);

      $query = AudioNote::geofence(
        $request->latitude,
        $request->longitude,
        $this->INNER_RADIUS,
        $request->outer_radius
      );

        //Pour recuperer toutes les audio notes de ces amis !attention ne comprend pas ces propres audios!
        // $audio = [];
        // foreach ($friends as $f) {
        //     array_push($audio, $f->audioNotes);
        // }
      return $query->join('users', 'audio_notes.user_id', '=', 'users.id')
        ->addSelect('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude', 'audio_notes.file_name')
        ->get();
    }

  /**
  * Download an audio note matching to filename
  *
  * [Returns the audio note as an audio playable file]
  *
  */
  public function download(Request $request){
    // TODO validate access rights

    $fileName = $request->file_name;
    $filePath = storage_path('app/audio/' . $fileName);
    $response = new BinaryFileResponse($filePath);

    BinaryFileResponse::trustXSendfileTypeHeader();
    return $response;
  }

}
