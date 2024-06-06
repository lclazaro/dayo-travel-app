<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table='countrys';
    protected $primaryKey='country_code';
    protected $fillable=['country_code','country_name','continent'];
    use HasFactory;
    public $timestamps = false;
}
