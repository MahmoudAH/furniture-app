<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Contact extends Model
{
    protected $fillable = ['name','email','address','message'];

}
