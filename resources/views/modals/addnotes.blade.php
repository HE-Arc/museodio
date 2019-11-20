<div id="addAudioNoteModal" class="modal modal-color">
  <div class="modal-content">
    <h2>Add a note</h2>
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input id="note_name" type="text" class="validate">
            <label for="note_name">Name</label>
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field">
            <div class="btn">
              <span>Audio</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer modal-color">
    <a href="#!" id="uploadButton" class="waves-effect waves-green btn action-buttons-color" onclick="uploadNote();">Upload</a>
  </div>
</div>
