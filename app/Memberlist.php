<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memberlist extends Model
{
    //
     protected $fillable = [
    	
		'CustomerName',
		'Gender',
		'Address',
		'City',
		'PostalCode',
		'Country',
	];
	
}
