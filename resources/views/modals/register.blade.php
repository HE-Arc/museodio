<div id="registerModal" class="modal modal-color">
  <div class="modal-content">
    <h2>Register</h2>
    <div class="row">
      <form method="POST" id="registerForm" action="" class="col s12">
        @csrf
        <div class="row">
          <div class="input-field col s6">
            <input id="reg_firstName" type="text" class="validate" required autocomplete="firstname" autofocus>
            <label for="reg_firstName">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="reg_lastName" type="text" class="validate">
            <label for="reg_lastName">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="reg_password" type="password" class="validate">
            <label for="reg_password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="reg_passwordConfirmation" type="password" class="validate">
            <label for="reg_passwordConfirmation">Confirm password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="reg_email" type="email" class="validate">
            <label for="reg_email">Email</label>
          </div>
        </div>
      </form>
    </div>
    <div class="header-container">
      <div  class="header-container">
        <div id="registerProgressBar" style="width: 97%;">
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer modal-color">
    <a href="#!" id="registerButton" class="waves-effect waves-green btn action-buttons-color" onclick="submitRegistration();">Register</a>
  </div>
</div>
