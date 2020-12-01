<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    //
    protected $table='product_color';
    protected $fillable=['product_id', 'color_name', 'created_by', 'updated_by'];

    public function product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }

}
