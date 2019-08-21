<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='kraemployeegroups';
    protected $primaryKey='empid';
    protected $fillable=['empname','groupname','startdate','enddate'];
    public $timestamps=false;
}
