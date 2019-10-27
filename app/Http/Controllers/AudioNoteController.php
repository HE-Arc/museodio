<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AudioNote;

class AudioNoteController extends Controller
{
  private $INNER_RADIUS = 0;
  private $UPLOAD_FOLDER = "/uploads/";

  public function index()
  {
    return AudioNote::join('users', 'audio_notes.user_id', '=', 'users.id')
      ->select('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude', 'audio_notes.file_name')
      ->get();
  }

  public function save(Request $request)
  {
    // TODO : validate parameters
    $latitude = $request->latitude;
    $longitude = $request->longitude;
    $audio = $request->file('audio');

    // TODO : AUTH::user
    $username = "jonas";
    $fileName = $username . "_" . date("Y_m_d_H_i_s") . "." . $audio->getClientOriginalExtension();

    $audio->move(base_path($this->UPLOAD_FOLDER), $fileName);

    $audioNote = new AudioNote();
    $audioNote->user_id = 1; // TODO : Get user ID
    $audioNote->latitude = $latitude;
    $audioNote->longitude = $longitude;
    $audioNote->file_name = $fileName;

    $audioNote->save();

    return response()->json("Successfuly uploaded file", 200);
  }

  public function showNearAudioNotes(Request $request)
  {
    $validatedData = $request->validate([
      'longitude' => 'numeric',
      'latitude' => 'numeric',
      'outer_radius' => 'numeric'
    ]);

    $query = AudioNote::geofence(
      $request->latitude,
      $request->longitude,
      $this->INNER_RADIUS,
      $request->outer_radius
    );

    return $query->join('users', 'audio_notes.user_id', '=', 'users.id')
      ->addSelect('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude', 'audio_notes.file_name')
      ->get();;
  }

  public function download(Request $request)
  {
    // TODO validate access rights
    $fileName = $request->file_name;
    $filePath = base_path(substr($this->UPLOAD_FOLDER, 1) . $fileName);

    return response()->download($filePath);
  }

}
