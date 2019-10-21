<div id="registerModal" class="modal modal-color">
  <div class="modal-content">
    <h2>Register</h2>
    <div class="row">
      <form method="POST" id="registerForm" action="{{route('register')}}" class="col s12">
        @csrf
        <div class="row">
          <div class="input-field col s6">
            <input id="firstname" type="text" class="validate" required autocomplete="firstname" autofocus>
            <label for="firstname">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="lastname" type="text" class="validate">
            <label for="lastname">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="conf_password" type="password" class="validate">
            <label for="password">Confirm password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer modal-color">
    <a href="#!" class="waves-effect waves-green btn action-buttons-color" onclick="submitRegistration();">Register</a>
  </div>
  <div class="header-container">
    <div class="progress header" style="width: 97%;">
      <div class="indeterminate"></div>
    </div>
  </div>
</div>
