<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'body'];

    public function user(){
        return $this->belongsTo('App\User'); //User::class also can
    }
}
    