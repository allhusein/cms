<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProgram extends Controller
{
    public function karir(){
        return "https://www.educastudio.com/program/karir";
    }

    public function magang(){
        return "https://www.educastudio.com/program/magang
        ";
    }

    public function industri(){
        return "https://www.educastudio.com/program/kunjungan-industri
        ";
    }

    public function lainnya(){
        return "Lainnya";
    }
}
