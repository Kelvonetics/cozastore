<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    //
    protected $table='customer_address';
    protected $fillable=['user_id', 'address', 'city', 'state', 'country', 'created_by', 'updated_by'];

    public function user()
    {
    	return $this->hasOne('App\User', 'user_id');
    }
}
