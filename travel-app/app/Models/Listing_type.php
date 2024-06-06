<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='Listing_type';
    protected $primaryKey='id';
    protected $fillable=['unit_type','unit_term'];
    use HasFactory;
}
