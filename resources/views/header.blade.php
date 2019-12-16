<div class="header-container">
  <div class="header">
    <nav class="main-nav-bar">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo mus-title left">Museodio</a>
        <ul class="right ">
          @unless (Auth::check())
          <li><a class="waves-effect waves-light btn modal-trigger action-buttons-color" onclick="closeAllModals(); setFocus('reg_firstName');" href="#registerModal">Register <i class="material-icons right">person_add</i></a></li>
          <li><a class="waves-effect waves-light btn modal-trigger action-buttons-color" onclick="closeAllModals(); setFocus('log_email');" href="#loginModal">Sign in <i class="material-icons right">input</i></a></li>
          <a href="#" id="sideNavButton" data-target="slide-out" class="sidenav-trigger show-on-large right"><i class="material-icons">menu</i></a>
          @endunless
          @unless (!Auth::check())
          <div class="">
            <a href="#" id="sideNavButton" data-target="slide-out" class="sidenav-trigger show-on-large right"><i class="material-icons">menu</i></a>

            <a class='btn-flat notifications-button' id="notificationsDropdownButton" href='#' data-target='notificationsDropdown' onclick="notificationsDropdown.open();">
              <i class="material-icons white-text notif">notifications</i>
              <small style="visibility: hidden;" id="notificationBell" class="notification-badge">0</small>
            </a>
            <!-- Notifications Dropdown Structure -->
            <ul style="width: 300px;" id='notificationsDropdown' class='dropdown-content main-dropdown'>

            </ul>
          </div>
          @endunless
        </ul>

      </div>
    </nav>
  </div>
</div>
