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
      $validator = $request->validate([
          'longitude' => 'required|numeric',
          'latitude' => 'required|numeric',
          'audio' => 'required|mimes:mpga,wav'
      ]);

      if($validator->fails()){
        return response()->json(['error' => $validator->errors()], 200);
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

    public function showNearAudioNotes(Request $request)
    {
      $validator = $request->validate([
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

      $friends = Auth::user()->friends;

      $friends_id = [];
      foreach($friend as $friends)
      {
          array_push($friends_id, $friend->id);
      }

      $friends = Auth::user()->askfriends;
      foreach($friend as $friends)
      {
          if($friend->isAccepted)
            array_push($friends_id, $friend->id);
      }


      return $query->whereIn('user_id',  $friends_id)
        ->join('users', 'audio_notes.user_id', '=', 'users.id')
        ->addSelect('users.firstName', 'users.lastName', 'audio_notes.longitude', 'audio_notes.latitude', 'audio_notes.file_name')
        ->get();
    }

    public function download(Request $request)
    {
        $fileName = $request->file_name;

        $fileOwnerUid = AudioNote::where('file_name', '=', $fileName)
        ->select('user_id')->get();

        $userCurrent = Auth::id();

        if(!Friends::isFriend($userCurrent, $fileOwnerUid))
        {
        return response()->json(["error"=>'audio notes not shared with you'],200);
        }

        $filePath = storage_path('app/audio/' . $fileName);
        $response = new BinaryFileResponse($filePath);

        BinaryFileResponse::trustXSendfileTypeHeader();
        return $response;
    }

}
