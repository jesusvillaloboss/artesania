<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
    use HasFactory;

    // RELACION UNO A MUCHOS PERO INVERSA
    public function piece(){
        return $this->belongsTo('App\Models\piece');
    }
}
