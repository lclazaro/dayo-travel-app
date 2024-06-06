<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='usercredentials';
    protected $primaryKey='email';
    protected $fillable=['email','password'];
    use HasFactory;
}
