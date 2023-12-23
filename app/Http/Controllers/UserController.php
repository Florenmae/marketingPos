<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTable;

class UserController extends Controller
{
    public function createUser(Request $request){
        $newUser = new userTable();

        $newUser->UserId = $request ->id;
        $newUser->role = $request->role;
        $newUser->name = $request->name;

        $res = $newUser->save();

        return $res;
    }

    public function getUsers(){

        return user::select()->where('UserId', Auth::id())->get();
    }


}
