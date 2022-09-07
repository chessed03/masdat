<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lead
 *
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */

class Lead extends Model
{
	protected $table = 'leads';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
