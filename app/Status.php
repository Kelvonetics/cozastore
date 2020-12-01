<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table='status';
    protected $fillable=['value', 'created_by', 'updated_by'];


    public function product()
    {
    	return $this->hasMany('App\Product', 'display_id');
    } 

    public function product_attribute()
    {
    	return $this->hasMany('App\ProductAttribute', 'feature');
    } 

    public function category()
    {
        return $this->hasMany('App\Category', 'display_id');
    }
}
