<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table='type';
    protected $fillable=['value', 'created_by', 'updated_by'];

    public function product_feature()
    {
    	return $this->hasMany('App\ProductFeature', 'type_id');
    }
}
