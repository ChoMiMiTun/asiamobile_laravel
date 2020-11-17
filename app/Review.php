<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = ['feedback'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'name');
    }
    
}
