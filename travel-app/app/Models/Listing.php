<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table='listings';
    protected $primaryKey='list_id';
    protected $fillable=['uid','list_id','list_name','unit_type','barangay','city', 'province', 'region', 'country_code'];
    use HasFactory;
}
