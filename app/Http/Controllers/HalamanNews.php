<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanNews extends Controller
{
  
    public function news($id){
        return "Halaman news dengan ID '$id'";
    }
}
