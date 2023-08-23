<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CopyTraders extends Model
{
    protected $guarded = [];

    public function pro_trade(){
        if ($this->pro_trade == 1)
        {
            return "Yes";
        }
        return "No";
    }
}
