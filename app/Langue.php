<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code_langue', 'name',
    ];
     
}
