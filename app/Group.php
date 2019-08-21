<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $table='kragroups';
    protected $primaryKey='id';
    protected $fillable=['id','groupname','groupdescription'];
    public $timestamps=false;
}
