<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
    use HasFactory;

    protected $fillable= ['titulo', 'comen','piece_id','created_at','updated_at'] ;



    // RELACION UNO A MUCHOS PERO INVERSA
    public function piece(){
        return $this->belongsTo('App\Models\piece');
    }
}
