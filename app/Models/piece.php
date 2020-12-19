<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class piece extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // RELACION UNO A MUCHOS
    public function coments(){
        return $this->hasMany('App\Models\coment');
    }

}
