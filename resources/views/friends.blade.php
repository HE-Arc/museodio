
<div>Friends</div>
<br>
<div>
    @foreach ($friends as $f)
            <div>
                {{$f->id}} - {{$f->firstname}} {{$f->lastname}}

                {!! Form::open(['route' => ['friends.destroy', $f->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Suprrimer') !!}
                {!! Form::close() !!}
                -------
            </div>
    @endforeach
</div>
<br>
<div>No Friends</div>
<br>
<div>
    @foreach ($nofriends as $f)
        <div>
            {{$f->id}} - {{$f->firstname}} {{$f->lastname}}

            {!! Form::open(['route' => ['friends.store', $f->id], 'method' => 'POST']) !!}
            {!! Form::submit('Demander')!!}
            {!! Form::close() !!}
            -------
        </div>
    @endforeach
</div>
