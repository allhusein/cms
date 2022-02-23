<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi!Selamat Datang di Website Laravel";
    }
    public function about(){
        return "Nama:Muhammad Al Husein <br> NIM:2041720040 <br> TI2G";
    }
    public function articles($id){
        return "Halaman article dengan Id '$id' ";
    }
}