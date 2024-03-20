<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('home',[
                    'clients' => User::whereIn('id', [4,9])->get()
                ]);

    }
}
