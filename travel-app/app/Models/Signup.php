<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $table='userinfo';
    protected $primaryKey='email';
    protected $fillable=['fname','lname','age','sex','phonenumber','email','password'];
    use HasFactory;
}
