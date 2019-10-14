<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AudioNote;

class AudioNoteController extends Controller
{
  private $inner_radius = 0;

  public function index()
  {
    return AudioNote::join('users', 'audio_notes.user_id', '=', 'users.id')
      ->select('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude')
      ->get();
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
      $this->inner_radius,
      $request->outer_radius
    );

    return response()->json($query->get(), 200);
  }
}
