<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CopyTrade extends Model
{
    protected $guarded = [];
    public function copy_traders()
    {
        return $this->belongsTo(CopyTraders::class);
    }
}
