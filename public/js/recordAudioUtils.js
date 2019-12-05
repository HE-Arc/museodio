

//const sleep = time => new Promise(resolve => setTimeout(resolve, time));
const recordButton = document.querySelector('#note_record');
const stopButton = document.querySelector('#note_stop');
const playButton = document.querySelector('#note_play');

let recorder;
let audio;

recordButton.addEventListener('click', async () => {
  recordButton.setAttribute('disabled', true);
  stopButton.removeAttribute('disabled');
  playButton.setAttribute('disabled', true);

  if (MediaRecorder.notSupported) {
  console.log('Audio recording is not supported in this browser')
}

  recordAudio();

});

stopButton.addEventListener('click', async () => {
  recordButton.removeAttribute('disabled');
  stopButton.setAttribute('disabled', true);
  playButton.removeAttribute('disabled');

  audio = recorder.stop();
  recorder.stream.getTracks().forEach(i => i.stop())
});

playButton.addEventListener('click', () => {
  audio.play();
});

function recordAudio(){
  console.log("Recording...");
  // Request permissions to record audio
  navigator.mediaDevices.getUserMedia({ audio: true }).then(stream => {
    recorder = new MediaRecorder(stream)

    // Set record to <audio> when recording will be finished
    recorder.addEventListener('dataavailable', e => {
      audio.src = URL.createObjectURL(e.data)
    })

    // Start recording
    recorder.start()
  })
}
