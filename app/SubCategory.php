<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $table='sub_category';
    protected $fillable=['category_id', 'sub_category_name', 'position', 'display', 'created_by', 'updated_by'];

    public function category()
    {
    	return $this->hasMany('App\Category', 'category_id');
    }
}
