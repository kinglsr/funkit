<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\User;
class UserController extends Controller
{
	/**
	 * to get all friends
	 * @return array
	 */
    public function getAllFriends() {
    	$userId = \Auth::user()->id;
    	$users = User::getAllFriends($userId);

    	return $users;
    }
}
