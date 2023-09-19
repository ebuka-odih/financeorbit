<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staked extends Model
{
    protected $guarded = [];

    public function staking()
    {
        return $this->belongsTo(Staking::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning'>In Progress</span>";
        }elseif ($this->status > 0){
            return "<span class='badge badge-success'>Ended</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Cancelled</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->status == 0){
            return "<span class='badge bg-warning'>In Progress</span>";
        }elseif ($this->status > 0){
            return "<span class='badge bg-success'>Ended</span>";
        }else{
            return "<span class='badge bg-danger text text-uppercase'>Cancelled</span>";
        }
    }
}
