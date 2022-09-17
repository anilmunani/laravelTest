<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
class Event extends Model
{
    protected $table="events";
    protected $primarykey="id"; 

    public function myevents()
    {
        return $this->hasmany(Workshop::class,'event_id','id');
    }
}
