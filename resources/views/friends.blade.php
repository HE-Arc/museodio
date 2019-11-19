
<div>Friends</div>
<br>
<div>
    @foreach ($friends as $f)
        @if($f->isAccepted)
            <div>
                {{$f->id}} - {{$f->firstname}} {{$f->lastname}}
                -------
                {!! Form::open(['route' => ['friends.destroy', $f->id], 'method' => 'DELETE']) !!}
                <button type="submit" href={{ url('/friends/destroy', ['id' => $f->id]) }}>Supprimer</button>
                {!! Form::submit('DELETE') !!}
                {!! Form::close() !!}
            </div>
        @else
            <div>
                {{$f->id}} - {{$f->firstname}} {{$f->lastname}}

                -------
                {!! Form::open(['route' => ['friends.update', $f->id], 'method' => 'PUT']) !!}
                {!!Form::submit('Click Me!')!!}
                <button type="submit" href={{ url('/friends/update', ['id' => $f->id]) }}>Accepter</button>
                {!! Form::submit('PUT') !!}
                {!! Form::close() !!}

                <button href={{ url('/friends/destroy', ['id' => $f->id]) }}>Refuser</button>  {{ method_field('DELETE') }}
            </div>
        @endif
    @endforeach

</div>
<br>
<div>
    @foreach ($nofriends as $f)
        <div>
            {{$f->id}} - {{$f->firstname}} {{$f->lastname}}
            ------- <button href={{ url('/friends/store', ['id' => $f->id]) }}>Demander</button>
        </div>
    @endforeach
</div>
