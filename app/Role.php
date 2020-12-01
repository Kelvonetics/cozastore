<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table='roles';
    protected $fillable=['role_name', 'created_by'];

    public function user()
    {
    	return $this->belongsTo('App\User','role');
    }

    public function permission()
    {
    	return $this->hasOne('App\Permission','role');
    }
}
