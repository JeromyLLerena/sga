<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imei extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $table = 'TA_IMEI';

	protected $fillable = [];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public $timestamps = false;
}
