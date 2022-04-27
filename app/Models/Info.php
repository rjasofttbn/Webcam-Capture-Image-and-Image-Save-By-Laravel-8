<?php

namespace App\Models;
// namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Info extends Model
{
    use HasFactory;
    protected $fillable = ['name','age','image'];
}



    