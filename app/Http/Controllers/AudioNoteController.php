<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use App\AudioNote;
use Auth;

class AudioNoteController extends Controller
{
  private $INNER_RADIUS = 0;

  public function index()
  {
    return AudioNote::join('users', 'audio_notes.user_id', '=', 'users.id')
      ->select('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude', 'audio_notes.file_name')
      ->get();
  }

  public function save(Request $request)
  {
      $validatedData = $request->validate([
      'longitude' => 'required|numeric',
      'latitude' => 'required|numeric',
      'audio' => 'required|mimes:mpga,wav'
      ]);

      $latitude = $request->latitude;
      $longitude = $request->longitude;
      $audio = $request->file('audio');

      $userid = Auth::user()->id;
      $fileName = $userid . "_" . date("Y_m_d_H_i_s") . "." . $audio->getClientOriginalExtension();

      $request->audio->storeAs("audio", $fileName);

      $audioNote = new AudioNote();
      $audioNote->user_id = Auth::id();
      $audioNote->latitude = $latitude;
      $audioNote->longitude = $longitude;
      $audioNote->file_name = $fileName;

      $audioNote->save();

      return response()->json("Successfuly uploaded file", 200);
    }

    public function showNearAudioNotes(Request $request)
    {
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

    // $userEx=1;
    // $audioOfEx=$userEx->audioNotes;
      return $query->join('users', 'audio_notes.user_id', '=', 'users.id')
        ->addSelect('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude', 'audio_notes.file_name')
        ->get();
    }

  public function download(Request $request)
  {
    // TODO validate access rights

    $fileName = $request->file_name;
    $filePath = storage_path('app/audio/' . $fileName);
    $response = new BinaryFileResponse($filePath);

    BinaryFileResponse::trustXSendfileTypeHeader();
    return $response;
  }

}
