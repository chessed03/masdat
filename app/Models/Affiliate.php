<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Affiliate
 *
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */

class Affiliate extends Model
{
	protected $table = 'affiliates';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
