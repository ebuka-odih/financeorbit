<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amazon extends Model
{
    protected $guarded = [];

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning'>Pending</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success'>Published</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Cancelled</span>";
        }
    }
}
