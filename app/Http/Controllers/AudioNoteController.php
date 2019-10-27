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
      ->select('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude')
      ->get();
  }

  public function save(Request $request)
  {
    // TODO : location, latitude
    $audio = $request->file('audio');

    // TODO : AUTH::user
    $username = "jonas";
    $fileName = $username . "_" . date("Y_m_d_H_i_s") . "." . $audio->getClientOriginalExtension();

    $audio->move(base_path($this->UPLOAD_FOLDER), $fileName);

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

    return response()->json($query->get(), 200);
  }
}
