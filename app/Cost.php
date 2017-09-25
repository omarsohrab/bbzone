<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model 
{

    protected $table = 'costs';
    public $timestamps = true;
    protected $fillable = array('sector_id', 'amount', 'paid_to');
    protected $visible = array('sector_id', 'paid_to');

    public function findCostSector()
    {
        return $this->hasOne('CostSectors', 'sector_id');
    }

}