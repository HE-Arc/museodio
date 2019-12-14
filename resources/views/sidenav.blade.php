<ul id="slide-out" class="sidenav main-sidenav">
  <li><div class="user-view">
    <div class="background">
      <img src="https://picsum.photos/300">
    </div>
    <a href="#user"><img class="circle" src="https://picsum.photos/201"></a>
    <a href="#name"><span class="white-text name">{{$user->firstname}} {{$user->lastname}}</span></a>
    <a href="#email"><span class="white-text email">{{$user->email}}</span></a>
  </div></li>
  <li><a href="#!">Change password</a></li>
  <li><div class="divider"></div></li>



  <ul class="collapsible collapsible-accordion main-sidenav">
    <li>
      <a style="margin-left: 5%;" class="waves-effect waves-light collapsible-header">
        Friends
        <i class="material-icons icon-white">supervisor_account</i>
        <span style="visibility: hidden;" id="friendRequestsBadge" class="new badge"></span>
      </a>
      <div class="collapsible-body main-friends-dropdown">
        <ul id="friendsDropdown">
        </ul>
      </div>
    </li>
  </ul>

<li><a class="waves-effect waves-light modal-trigger" onclick="closeAllModals();" href="#searchUserModal"><i class="material-icons icon-white">search</i>Search user</a></li>

<li><a href="{{route('api/logout')}}"><i class="material-icons icon-white">exit_to_app</i>Logout</a></li>
</ul>
