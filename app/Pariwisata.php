<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Pariwisata extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'pariwisatas';

    protected $fillable = [
    	'namatempat','kategori','alamat','haribuka','jambuka','jamtutup','hargatiket','deskripsi','foto'
    ];

    public function comments()
	{
  		return $this->hasMany('App\Comment');
	}
}
