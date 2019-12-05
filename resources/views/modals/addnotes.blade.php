<div id="addAudioNoteModal" class="modal modal-color">
  <div class="modal-content">
    <h2>Add a note</h2>
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="note_lat" type="number" class="validate" step=any>
            <label for="note_lat">Latitude</label>
          </div>
          <div class="input-field col s6">
            <input id="note_long" type="number" class="validate" step=any>
            <label for="note_long">Longitude</label>
          </div>
        </div>
        <div class="row">
          <br>
          <h4>Record audio</h4>
        </div>
        <div class="row">
          <div class="col s6 center">
            <button class="waves-effect waves-green btn action-buttons-color" id="note_record">Record</button>
          </div>
          <div class="col s6 center">
            <button class="waves-effect waves-green btn action-buttons-color" id="note_stop" disabled>Stop</button>
          </div>
        </div>
        <div class="row">
          <div id="audioPlayerContainer" class="col s12 center" style="display: none; width: 100%;">
            <audio controls src="" id="audioPlayer" preload="none"></audio>
          </div>
        </div>
        <div class="row">
          <br>
          <h4>Otherwise</h4>
          <p>Upload a file</p>
        </div>
        <div class="row">
          <div class="file-field input-field">
            <div class="btn">
              <span>Audio</span>
              <input id="note_file" type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-container">
      <div  class="header-container">
        <div id="noteProgressBar" style="width: 97%;">
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer modal-color">
    <a href="#!" id="noteButton" class="waves-effect waves-green btn action-buttons-color" onclick="submitAudioNote();">Upload</a>
  </div>
</div>
