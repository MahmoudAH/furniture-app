<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class ContactUS extends Model
{
    
    protected $fillable = ['name','email','address','message'];
}

