<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    //
    protected $table='product_feature';
    protected $fillable=['product_id', 'type_id', 'value_1', 'value_2', 'created_by', 'updated_by'];

    public function product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }

    public function type()
    {
    	return $this->belongsTo('App\Type', 'type_id');
    }

}

