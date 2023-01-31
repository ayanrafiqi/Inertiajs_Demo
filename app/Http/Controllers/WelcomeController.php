<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function show(User $user){
        return Inertia::render('Welcome',[
            'user'=>$user
        ]);
     }
}
