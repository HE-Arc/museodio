
<div>Friends</div>
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
