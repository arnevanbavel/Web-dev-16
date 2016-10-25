<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Code extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
}