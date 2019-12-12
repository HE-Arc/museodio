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
        'id', 'user_id_1', 'user_id_2', 'isAccepted'
    ];

    public static function isFriend($iduser1,$iduser2)
    {
        return DB::select(DB::raw("SELECT 'isAccepted' where
            ('user_id_1' = :u1 and 'user_id_2' = :u2) or ( 'user_id_2' = :u3 and 'user_id_1' = :u4)")
            ,['u1'=>$iduser1,'u2'=>$iduser2,'u3'=>$iduser2,'u4'=>$iduser1]);
    }

    public static function userIdFriend($iduser1, $iduser2)
    {
        return DB::select(DB::raw("SELECT * where
            ('user_id_1' = :u1 and 'user_id_2' = :u2) or ( 'user_id_2' = :u3 and 'user_id_1' = :u4)")
            ,['u1'=>$iduser1,'u2'=>$iduser2,'u3'=>$iduser2,'u4'=>$iduser1]);
    }

}
