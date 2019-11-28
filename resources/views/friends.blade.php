
<div>Friends</div>
<br>
<div>
    @foreach ($friends as $f)
        @if($f->isAccepted)
            <div>
                {{$f->id}} - {{$f->firstname}} {{$f->lastname}}
                -------
                {!! Form::open(['route' => ['friends.destroy', $f->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Suprrimer') !!}
                {!! Form::close() !!}
            </div>
        @else
            <div>
                {{$f->id}} - {{$f->firstname}} {{$f->lastname}}

                -------
                {!! Form::open(['route' => ['friends.update', $f->id], 'method' => 'PUT']) !!}
                {!! Form::submit('Accepter')!!}
                {!! Form::close() !!}

                {!! Form::open(['route' => ['friends.destroy', $f->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Refuser')!!}
                {!! Form::close() !!}
            </div>
        @endif
    @endforeach
</div>
<br>
<div>
    @foreach ($nofriends as $f)
        <div>
            {{$f->id}} - {{$f->firstname}} {{$f->lastname}}
            -------
            {!! Form::open(['route' => ['friends.store', $f->id], 'method' => 'POST']) !!}
            {!! Form::submit('Demander')!!}
            {!! Form::close() !!}
        </div>
    @endforeach
</div>

<div>
    @foreach ($audio as $a)
        <div>
            {{ $a }}
        </div>
    @endforeach
</div>
