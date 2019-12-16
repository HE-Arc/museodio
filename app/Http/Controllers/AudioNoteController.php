<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Support\Facades\Validator;
use App\AudioNote;
use App\User;
use App\Friends;
use Auth;

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
  * @urlParam longitude required The id of the location. Example: 7.0
  * @urlParam latitude required The id of the location. Example: 7.0
  * @urlParam audio required The audio file name. Example: test.mp3
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
    * @urlParam longitude numeric required The latitude. Example: 7.0
    * @urlParam latitude numeric required The longitude. Example: 46.0
    * @urlParam outer_radius numeric required The outer radius. Example: 1000
    * [Returns the available audio notes]
    *
    */
    public function showNearAudioNotes(Request $request){
      $validatedData = $request->validate([
        'longitude' => 'required|numeric',
        'latitude' => 'required|numeric',
        'outer_radius' => 'numeric'
      ]);


      if($validator->fails()){
        return response()->json(['error' => $validator->errors()], 200);
      }

      $query = AudioNote::geofence(
        $request->latitude,
        $request->longitude,
        $this->INNER_RADIUS,
        $request->outer_radius
      );

      $id= Auth::id();

      $friends = User::findOrFail($id)->friends;

      $friends_id = [];
      foreach($friends as $friend)
      {
          array_push($friends_id, $friend->id);
      }

      return $query->whereIn('user_id',  $friends_id)
        ->join('users', 'audio_notes.user_id', '=', 'users.id')
        ->addSelect('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude', 'audio_notes.file_name')
        ->get();
    }

  /**
  * Download an audio note matching to filename
  * @urlParam file_name string required The file name. Example: 11_2019_12_16_20_23_30.mp3
  * [Returns the audio note as an audio playable file]
  *
  */
  public function download(Request $request){
        $fileName = $request->file_name;
        $jsonFile = json_decode(AudioNoteController::check($request)->content(), true);


        if(isset($jsonFile['success']))
        {
          $filePath = storage_path('app/audio/' . $fileName);
          $response = new BinaryFileResponse($filePath);

          BinaryFileResponse::trustXSendfileTypeHeader();
          return $response;
        }
        else{
          return response()->json(["error" => ["error" => "This audio notes is not shared with you."]], 200);
        }
    }


    /**
    * Checks if a user has access to an audio note
    * @urlParam file_name string required The file name. Example: 11_2019_12_16_20_23_30.mp3
    * [Returns the authorization to access an audio note]
    *
    */
    public function check(Request $request){
      $fileName = $request->file_name;
      $fileOwnerUid = AudioNote::where('file_name', '=', $fileName)->select('user_id')->get();

      $userCurrent = Auth::id();
      $fileOwnerUser = User::findOrFail($fileOwnerUid[0]['user_id']);

      if(Auth::user()->friends->contains($fileOwnerUser) || Auth::user()->is($fileOwnerUser))
      {
        return response()->json(['success' => ['file' => $fileName]], 200);
      }

      return response()->json(["error" => ["error" => "This audio notes is not shared with you."]], 200);
    }

}
