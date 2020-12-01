<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    //
    protected $table='condition';
    protected $fillable=['value', 'created_by', 'updated_by'];

    public function product_attribute()
    {
    	return $this->hasMany('App\ProductAttribute', 'product_condition');
    } 
}
