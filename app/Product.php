<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='product';
    protected $fillable=['category_id', 'product_name', 'title', 'description', 'cost_price', 'unit_price', 'quantity', 'display', 'created_by', 'updated_by'];

    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function status_display()
    {
        return $this->belongsTo('App\Status', 'display');
    }



    public function product_image()
    {
    	return $this->hasOne('App\ProductImage', 'product_id');
    }

    public function product_attribute()
    {
    	return $this->hasMany('App\ProductAttribute', 'product_id');
    }

    public function product_color()
    {
    	return $this->hasMany('App\ProductColor', 'product_id');
    }

    public function product_size()
    {
    	return $this->hasMany('App\ProductSize', 'product_id');
    }

    public function product()
    {
        return $this->hasMany('App\Product', 'product_id');
    }

    public function cart()
    {
        return $this->hasMany('App\Cart', 'product_id');
    }
}
