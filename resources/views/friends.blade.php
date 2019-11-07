
<div>Friends</div>

<div>
    @forelse ($users as $user)
        <div>
            {{$user->id}} - {{$user->firstname}} {{$user->lastname}} ------- <button>V</button> <button>X</button>
        </div>
    @empty
        <p>Pas de réservations !</p>
    @endforelse
</div>
