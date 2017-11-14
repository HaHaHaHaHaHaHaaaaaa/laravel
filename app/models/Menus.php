<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    //
    protected $table="menus";
    public $timestamps=false;
    public function child(){
        return $this->hasMany('App\models\ChildMenus');
    }
}
