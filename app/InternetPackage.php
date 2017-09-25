<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternetPackage extends Model 
{

    protected $table = 'internet_packages';
    public $timestamps = true;
    protected $fillable = array('name', 'description', 'internet_speed', 'pricing');
    protected $visible = array('description', 'internet_speed', 'pricing');

}