
<div>Friends</div>
<br>
<div>
    @foreach ($users as $user)
        <div>
            {{$user->id}} - {{$user->firstname}} {{$user->lastname}} ------- <button>Demander</button> <button>Accepter</button> <button>Refuser</button> <button>Supprimer</button>
        </div>
    @endforeach
</div>
<br>
<div>
    @foreach ($friends as $friend)
        <div>
            {{App\Friends::getUserById($friend->user_id_1)->firstname}} {{App\Friends::getUserById($friend->user_id_1)->lastname}} -
            {{App\Friends::getUserById($friend->user_id_2)->firstname}} {{App\Friends::getUserById($friend->user_id_2)->lastname}}
            ------- <button>Demander</button> <button>Accepter</button> <button>Refuser</button> <button>Supprimer</button>
        </div>
    @endforeach
</div>
<br>
<div>
    @foreach ($fr as $f)
        @if($f->isAccepted)
            <div>
                {{$f->id}} - {{$f->firstname}} {{$f->lastname}}
                ------- <button>Supprimer</button>
            </div>
        @else
            <div>
                {{$f->id}} - {{$f->firstname}} {{$f->lastname}}
                ------- <button>Accepter</button> <button>Refuser</button>
            </div>
        @endif
    @endforeach

</div>
<br>
<div>
    @foreach ($nofr as $f)
        <div>
            {{$f->id}} - {{$f->firstname}} {{$f->lastname}}
            ------- <button>Demander</button>
        </div>
    @endforeach
</div>
