<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code_nature', 'libelle_nature',
    ];
}
