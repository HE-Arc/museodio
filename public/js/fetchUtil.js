async function fetchAudioNotes() {
  const response = await fetch(APP_URL + `/api/audio-notes`);
  const json = await response.json();

  return json;
}
