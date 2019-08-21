<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kra extends Model
{
    protected $table='kramaster';
    protected $primaryKey='id';
    protected $fillable=['id','kraname','kradescription'];
    public $timestamps=false;
}
