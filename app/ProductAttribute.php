<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    //
    protected $table='product_attribute';
    protected $fillable=['product_id', 'discount', 'feature', 'shipping_fee', 'product_condition', 'created_by', 'updated_by'];

    public function product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }

    public function status_feature()
    {
    	return $this->belongsTo('App\Status', 'feature');
    }

    public function condition()
    {
        return $this->belongsTo('App\Condition', 'product_condition');
    }


}
