<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staking extends Model
{
    public function staked()
    {
        return $this->hasMany(Staked::class);
    }
}
