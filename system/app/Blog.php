<?php

namespace App;

class  Blog Extends Model{
	protected $table = 'blog';

	function seller(){
		return $this->belongsTo(User:: class, 'id_user');
	}
}