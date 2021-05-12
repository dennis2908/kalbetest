<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ongkir extends Model
{
    protected $fillable = [
        'id',
        'nm_prov',
        'ongkir'
    ];
	
	public function ongkir()
    {
    	
    }
}
