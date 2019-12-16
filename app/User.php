<?php
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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

  /**
  * Eloquent relation to select AudioNotes create by the user
  *
  * @return App\AudioNote
  */
  public function audioNotes(){
    return $this->hasMany('App\AudioNote');
  }

  /**
  * Method to create a friendship between two users
  *
  * @return void
  */
  public function addFriend(User $user){
    $this->friends()->attach($user->id);
  }

  /**
  * Method to delete a friendship between two users
  *
  * @return void
  */
  public function removeFriend(User $user){
    $this->friends()->detach($user->id);
  }


  public function friends()
  {
    return $this->belongsToMany('App\User', 'App\Friends', 'user_id_1', 'user_id_2')
    ->wherePivot('isAccepted', 1);
  }

  // friendship that I started and was accepted
  public function friendsOfMine()
  {
    return $this->belongsToMany('App\User', 'App\Friends', 'user_id_1', 'user_id_2')
    ->wherePivot('isAccepted', 1);
  }

  // friendship that I was invited to and accepted
  public function friendOf()
  {
    return $this->belongsToMany('App\User', 'App\Friends', 'user_id_2', 'user_id_1')
    ->wherePivot('isAccepted', 1);
  }

  // friendship that I was invited to and did not answer yet
  public function invitationsToAnswer()
  {
    return $this->belongsToMany('App\User', 'App\Friends', 'user_id_2', 'user_id_1')
    ->wherePivot('isAccepted', 0);
  }

  //friendships that I started and that were not accepted yet
  public function invitationsWaitingForAnswer()
  {
    return $this->belongsToMany('App\User', 'App\Friends', 'user_id_1', 'user_id_2')
    ->wherePivot('isAccepted', 0);
  }


  // accessor allowing you call $user->friends
  public function getFriendsAttribute()
  {
    if ( ! array_key_exists('friends', $this->relations)) $this->loadFriends();

    return $this->getRelation('friends');
  }

  protected function loadFriends()
  {
    if ( ! array_key_exists('friends', $this->relations))
    {
      $friends = $this->mergeFriends();

      $this->setRelation('friends', $friends);
    }
  }

  protected function mergeFriends()
  {
    return $this->friendsOfMine->merge($this->friendOf);
  }









}
