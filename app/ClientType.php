<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model 
{

    protected $table = 'client_type';
    public $timestamps = true;
    protected $fillable = array('title');
    protected $visible = array('title');

}