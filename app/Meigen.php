<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meigen extends Model
{
    protected $table = 'meigens';
    
    public function izin()
    {
        return $this->belongsTo('App\Izin');
    }
    
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
