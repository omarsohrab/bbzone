<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostSector extends Model
{
    protected $table = 'cost_sectors';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'reguler_ammount', 'pay_to');
    protected $visible = array('title', 'description', 'reguler_ammount', 'pay_to');

    public function hasManyCosts()
    {
        return $this->hasMany('Cost', 'sector_id');
    }
}
