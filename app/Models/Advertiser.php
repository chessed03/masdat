<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Advertiser
 *
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */

class Advertiser extends Model
{
	protected $table = 'advertisers';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
