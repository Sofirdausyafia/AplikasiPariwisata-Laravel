<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
	protected $connection = 'mongodb';
    protected $collection = 'pariwisatas';

    protected $fillable = [
    	'user_id','post_id','isi'
    ];

    public function pariwisata() 
    {
    	return $this->belongsTo('App\Pariwisata');
  	}
 
  	public function user()
  	{
    	return $this->belongsTo('App\User');
  	}
}
