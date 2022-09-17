<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function ChildMenu()
    {
        return $this->hasMany('menu_items','name','id');
       
    }
    public function AllChildrenMenu()
    {
        return $this->ChildMenu()->with('Allchildren');
    }
}
