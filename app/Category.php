<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='category';
    protected $fillable=['category_name', 'description', 'position', 'display_id', 'created_by', 'updated_by'];

    public function sub_category()
    {
    	return $this->belongsTo('App\SubCategory', 'category_id');
    }

    public function displays()
    {
        return $this->belongsTo('App\Status', 'display_id');
    }


    

    public function product()
    {
    	return $this->hasMany('App\Product', 'category_id');
    }
}
