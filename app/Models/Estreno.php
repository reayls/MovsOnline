<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estreno
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $na
 *
 * @package App\Models
 */
class Estreno extends Model
{
	protected $table = 'estrenos';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion',
		'na'
	];
}
