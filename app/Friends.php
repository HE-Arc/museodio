<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\DB;

class Friends extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','user_id_1', 'user_id_2','isAccepted'
    ];


    public function user1()
    {
        return $this->hasMany(User::class,'id');
    }

    public function user2()
    {
        return $this->hasMany(User::class,'id');
    }

    public function user()
    {
        if($this->user1->id == $this->id ){
            return $this->user1;
        }
        return $this->user2;
    }

    public static function getUserById($id)
    {
        //TODO
        return User::getUserById($id);
    }

    public static function getAllFriends($id)
    {
        //TODO
        return DB::table('friends')->where('user_id_1','=', $id)->orWhere('user_id_2', '=',$id)->get();
        //return Friends::all();
    }
    public static function isFriend($id,$idFriend)
    {
        $friends = getAllFriends($id);
        foreach ($friends as $key => $value) {
            var_dump($value);
        }
    }
    public static function getAllNoFriends($id)
    {
        //TODO
        //$users=User::all();
        //foreach ($users as $key => $value) {
            //var_dump($key);
            //if (!Friends::isFriend($id,$key) && $key!=$id) {
                // code...
            //}
        //}

        //return DB::table('friends')->select()->where('user_id_1','=', $id)->orWhere('user_id_2', '=',$id)->get();
        return User::all();
    }
}
