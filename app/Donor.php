<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['name','phone','address','blood_group','email'];

    // accessors
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getCreatedAtAttribute($value)
    {
    	return \Carbon\Carbon::parse($value)->diffForHumans();
    }
}
