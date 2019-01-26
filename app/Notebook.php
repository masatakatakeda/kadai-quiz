<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    public $timestamps = false; //timesatampを利用しない
    protected $fillable = ['display_number', 'title', 'point','content'];
}
