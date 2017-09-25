<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientPayment extends Model 
{

    protected $table = 'client_payments';
    public $timestamps = true;
    protected $fillable = array('amount', 'client_id', 'date');
    protected $visible = array('amount', 'client_id', 'date');

}