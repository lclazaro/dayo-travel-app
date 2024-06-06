<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing_type extends Model
{
    protected $table='listing_types';
    protected $primaryKey='id';
    protected $fillable=['unit_type','unit_term'];
    use HasFactory;
}
