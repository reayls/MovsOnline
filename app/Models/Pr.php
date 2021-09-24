<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pr
 * 
 * @property int $id
 * @property string $title
 *
 * @package App\Models
 */
class Pr extends Model
{
	protected $table = 'prs';
	public $timestamps = false;

	protected $fillable = [
		'title'
	];
}
