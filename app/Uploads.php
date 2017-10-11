<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email', 'full_name', 'lg_id', 'birth_cert', 'o_level', 'passport', 'testimonial', 'med_cert'];

}
