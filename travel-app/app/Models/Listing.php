<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table='listings';
    protected $primaryKey='list_id';
    protected $fillable=['fname','lname','age','sex','contactnum','email'];
    use HasFactory;
}
