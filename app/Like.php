<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

	public function user()
	{
		return $this->belogsTo('App\User');
	}

	public function review()
	{
		return $this->belogsTo('App\Review');
	}

}
