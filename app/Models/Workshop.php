<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use App\Models\events;
class Workshop extends Model
{
    protected $table="workshops";
    protected $primarykey="id"; 

    public function myworkshop()
    {
        return $this->belongsTo(events::class);
    }
}
