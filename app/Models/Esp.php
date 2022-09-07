<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Esp
 *
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */

class Esp extends Model
{
	protected $table = 'esps';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
