<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelicula
 * 
 * @property int $id
 * @property string $title
 * @property string|null $poster
 * @property string|null $sinopsis
 * @property string|null $rating
 * @property string|null $genero
 * @property string|null $director
 * @property string|null $actores
 * @property string|null $trailer
 * @property string|null $video1
 * @property string|null $video2
 * @property string|null $video3
 * @property string|null $video4
 * @property string|null $video5
 * @property string|null $video6
 *
 * @package App\Models
 */
class Pelicula extends Model
{
	protected $table = 'peliculas';
	public $timestamps = false;

	protected $fillable = [
		'title',
		'poster',
		'sinopsis',
		'rating',
		'genero',
		'director',
		'actores',
		'trailer',
		'video1',
		'video2',
		'video3',
		'video4',
		'video5',
		'video6'
	];
}
