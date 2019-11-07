async function fetchAudioNotes() {
  const response = await fetch(APP_URL + `/api/audio-notes`);
  const json = await response.json();

  return json;
}

// async function pushAudioNote(audioFile) {
//   console.log(audioFile)
//   const response = await fetch(`/api/audio-notes/save`, {
//       method: 'POST',
//       headers: {
//         'Accept': 'application/json',
//         'Content-Type': 'Content-Type: audio/mpeg'
//       },
//       body: audioFile
//     });
//
//   const json = await response.json();
//
//   return json;
// }
