<?php

class Domain extends \Eloquent {
	
	protected $fillable = ['name'];

	public function users(){
		return $this->belongsToMany('User');
	}
}