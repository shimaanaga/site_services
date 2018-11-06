<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';



    public function order()
    {
        return $this->belongsTo('App\Order' , 'order_id');
    }
}
