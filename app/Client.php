<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model 
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'adrees', 'area', 'client_type', 'payment_date', 'package_id');
    protected $visible = array('name','adrees', 'area', 'client_type', 'payment_date', 'package_id');

    public function hasManyPayments()
    {
        return $this->hasMany('ClientPayment', 'client_id');
    }

    

    public function findClientType()
    {
        return $this->hasOne('ClientType', 'client_type');
    }

}