<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Coba extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cobas';

    protected $fillable = [
    	'nama','deskripsi','alamat'
    ];
}
