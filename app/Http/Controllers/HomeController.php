<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        //return "Hi!Selamat Datang di Website Laravel";

       // $posts=posts::all();
       // return view('product', ['posts'=>$posts]);

       $user = Auth::user();
       return view('home',['user' => $user]);
    }

  
}
