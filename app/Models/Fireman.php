<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Fireman extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'TA_BOMBERO';
    public $timestamps = false;
}
