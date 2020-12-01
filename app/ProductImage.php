<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    protected $table='product_image';
    protected $fillable=['product_id', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6', 'image_7', 'image_8', 'image_9', 'image_10', 'created_by', 'updated_by'];

    public function product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }
}
