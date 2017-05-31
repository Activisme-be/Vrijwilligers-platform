<?php defined('BASEPATH') OR exit('No direct script access'); 

use Illuminate\Database\Eloquent\Model;

class Volunteers extends Model 
{
    protected $table = 'vrijwilligers'; 

    protected $fillable = ['name', 'email', 'extra_information', 'city_id'];
}