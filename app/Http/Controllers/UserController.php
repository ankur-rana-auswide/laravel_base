<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Validation\Rule;
use DB;
class UserController extends Controller
{
    
    public function list_user(){
        $users = User::paginate(10); // Fetch all users from the User model
        return view('pages.users.list-user', compact('users'));
    }
    
    public function create_user(){
         return view('pages.users.create-user');
    }


}
