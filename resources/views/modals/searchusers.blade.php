<div id="searchUserModal" class="modal modal-color">
  <div class="modal-content">
    <h2>Search user</h2>
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons icon-white prefix">account_circle</i>
            <input id="searchuser_search" name="searchuser_search" type="text" class="validate">
            <label for="searchuser_search">Search</label>
          </div>
        </div>
        <div class="row">
          <ul class="collection search-results mca-always-visible" id="mainSearchResults">
            <li data-userID="1" class="collection-item search-results">Alvin</li>
            <li data-userID="2" class="collection-item search-results">Alvin</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header-container">
      <div  class="header-container">
        <div id="searchUserProgressBar" style="width: 97%;">
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer modal-color">
    <a href="#!" id="searchUserButton" class="waves-effect waves-green btn action-buttons-color" onclick="submitSearch();">Search</a>
  </div>
</div>
