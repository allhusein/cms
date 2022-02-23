<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProducts extends Controller
{
    public function edu(){
        return "https://www.educastudio.com/category/marbel-edu-games";
    }

    public function friend(){
        return "https://www.educastudio.com/category/marbel-and-friends-kids-games
        ";
    }

    public function books(){
        return "https://www.educastudio.com/category/riri-story-books";
    }

    public function song(){
        return "https://www.educastudio.com/category/kolak-kids-songs";
    }
}
