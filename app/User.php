<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * to get all friends of particular user
     * @param  integer $userId
     * @return array        
     */
    public static function getAllFriends($userId = null) {
        $users = User::where('users.id','!=',$userId)
                ->select('id','name')
                ->get();

        return $users;
    }
}
