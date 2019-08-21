<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    protected $table='kragroupdetails';
    protected $primaryKey='id';
    protected $fillable=['id','groupname','kraname','percentage'];
    public $timestamps=false;
}
