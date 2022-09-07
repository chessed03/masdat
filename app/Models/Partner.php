<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partner
 *
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */

class Partner extends Model
{
	protected $table = 'partners';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
