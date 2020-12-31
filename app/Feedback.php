<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['name','email','feedback','user_id'];

    // accesssors
    public function getCreatedAtAttribute($value)
    {
    	return \Carbon\Carbon::parse($value)->diffForHumans();
    }

    // relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

