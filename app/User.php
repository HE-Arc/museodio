<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\AudioNote;
use App\Friends;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'isAdmin'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function audioNotes()
    {
        return $this->hasMany('App\AudioNote');
    }


	public function friends()
	{
		return $this->belongsToMany('App\User', 'App\Friends', 'user_id_1', 'user_id_2');
	}

    public function nofriends()
    {
        //TODO
        // var_dump("hey");
        // $idUser=1;
        // $userCurrent=User::findOrFail($idUser);
        //
        // $users=User::all();
        // $friends = $userCurrent->friends;
        //
        // $nofriends = [];
        //
        // //TODO a changer
        // foreach ($users as $user) {
        //    if ($user->id != $idUser) {
        //        foreach ($friends as $friend) {
        //           if(!($friend->user_id_1 == $idUser &&
        //             $friend->user_id_2 == $user->id ||
        //             $friend->user_id_2 == $idUser &&
        //             $friend->user_id_1 == $user->id)){
        //               array_push($nofriends,User::findOrFail($friend->user_id_2));
        //           }
        //        }
        //    }
        // }

        // $users=User::all()->diff($userCurrent->belongsToMany('App\User', 'App\Friends', 'user_id_1', 'user_id_2'));
        // $friends = $userCurrent->friends;
        
        //return User::all()->diff($this->belongsToMany('App\User', 'App\Friends', 'user_id_1', 'user_id_2'));
    }

	public function addFriend(User $user)
	{
		$this->friends()->attach($user->id);
	}

	public function removeFriend(User $user)
	{
		$this->friends()->detach($user->id);
	}

}
