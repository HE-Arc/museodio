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

    public static function getFriendsbyUsersId($id1,$id2)
    {
        //TODO
        return DB::table('friends')->select('id')->where('user_id_1','=', $id1)->where('user_id_2','=', $id2)->orWhere('user_id_2', '=',$id1)->orWhere('user_id_1', '=',$id2);
    }

}
