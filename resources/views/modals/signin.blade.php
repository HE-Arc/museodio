<div id="loginModal" class="modal modal-color">
  <div class="modal-content">
    <h2>Sign in</h2>
    <div class="row">
      <form method="POST" id="registerForm" target="" class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="log_email" type="email" class="validate">
            <label for="log_email">Email</label>
          </div>
          <div class="input-field col s6">
            <input id="log_password" type="password" class="validate">
            <label for="log_password">Password</label>
          </div>
        </div>
      </form>
    </div>
    <div class="header-container">
      <div  class="header-container">
        <div id="loginProgressBar" style="width: 97%;">
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer modal-color">
    <a href="#!" id="loginButton" class="waves-effect waves-green btn action-buttons-color" onclick="submitLogin();">Register</a>
  </div>
</div>
