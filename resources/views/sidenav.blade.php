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
    <li><a href="{{route('api/logout')}}"><i class="material-icons icon-white">exit_to_app</i>Logout</a></li>
    @php
      //var_dump($user);
    @endphp
  </ul>
