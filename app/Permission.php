<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $table='permissions';
    protected $fillable=['role', 'acc_add', 'acc_edit', 'acc_view', 'acc_report', 'admin', 'settings', 'setup', 'other', 'created_by'];


    public function role()
    {
    	return $this->belongsTo('App\Role', 'role');
    }
    
}
