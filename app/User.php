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
 * Eloquent relation to select friendship create by the user
 * Pivot to select column isAccepted
 *
 * @return App\User
 */
	public function friends(){
		return $this->belongsToMany('App\User', 'App\Friends', 'user_id_1', 'user_id_2')->withPivot('isAccepted');
	}

  /**
 * Eloquent relation to  select friendship create by another user
 * Pivot to select column isAccepted
 *
 * @return App\User
 */
  public function askfriends(){
		return $this->belongsToMany('App\User', 'App\Friends', 'user_id_2', 'user_id_1')->withPivot('isAccepted');
	}

  /**
 * Method to select all users with no friendship with the current user
 *
 * @return App\User
 */
  public function nofriends(){
      //$idUser=Auth::id();
      $idUser=1;
      $userCurrent=User::findOrFail($idUser);

      $users = User::all()->except($idUser);
      $friends = $userCurrent->friends;
      $askfriends= $userCurrent->askfriends;

      $diff = $users->diff($friends)->diff($askfriends);
      return $diff;
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
}
