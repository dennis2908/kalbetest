<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
	protected  $primaryKey = 'intCustomerID'; 
    protected $fillable = [
        'txtCustomerName',
        'email',
        'password',
        'phone',
        'txtCustomerAddress',
		'bitGenders',
        'dtmBirthDate',
		'Inserted'
    ];
}
