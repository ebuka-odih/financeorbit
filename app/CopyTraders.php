<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CopyTraders extends Model
{
    protected $guarded = [];

    public function copy_trades()
    {
        return $this->hasMany(CopyTrade::class, 'copy_traders_id');
    }


    public function pro_trade(){
        if ($this->pro_trade == 1)
        {
            return "Yes";
        }
        return "No";
    }
}
