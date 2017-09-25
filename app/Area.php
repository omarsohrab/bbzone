<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model 
{

    protected $table = 'area';
    public $timestamps = true;
    protected $fillable = array('name', 'administrator');
    protected $visible = array('name', 'administrator');

    public function hasManyClients()
    {
        return $this->hasMany('App\Client', 'area_id');
    }

}