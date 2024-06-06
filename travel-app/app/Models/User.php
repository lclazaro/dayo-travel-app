<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    protected $primaryKey='uid';
    protected $fillable=['uid', 'fname','lname','age','sex','contactnum','email'];
    use HasFactory;
    public $timestamps = false;
}
