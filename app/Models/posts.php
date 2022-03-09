<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = false; 
}
