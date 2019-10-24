<div class="header-container">
  <div class="header">
    <nav class="main-nav-bar">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo mus-title">Museodio</a>
        <ul class="right hide-on-med-and-down">
          @unless (Auth::check())
          <li><a class="waves-effect waves-light btn modal-trigger action-buttons-color" href="#registerModal">Register <i class="material-icons right">person_add</i></a></li>
          <li><a class="waves-effect waves-light btn modal-trigger action-buttons-color" href="#loginModal">Sign in <i class="material-icons right">input</i></a></li>
          @endunless
        </ul>
      </div>
    </nav>
  </div>
</div>
