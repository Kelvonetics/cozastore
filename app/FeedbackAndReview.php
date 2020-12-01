<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackAndReview extends Model
{
    //
    protected $table='feedback_and_review';
    protected $fillable=['product_id', 'title', 'review', 'ratings', 'created_by', 'updated_by'];

    public function product()
    {
    	return $this->belongsTo('App\Product', 'product_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by');
    }
}
