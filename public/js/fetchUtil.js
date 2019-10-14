async function fetchAudioNotes() {
  const response = await fetch(`/api/audio-notes`);
  const json = await response.json();

  return json;
}
