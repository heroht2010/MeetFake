<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table = 'events';
    protected $fillable = ['id','email','title','color','textColor','start'];
    public $timestamps = false;
}
