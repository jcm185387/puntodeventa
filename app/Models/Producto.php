<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categoria(){
        //return $this->belongsTo('MiResidenciaEnLinea\User');
        //return "nada";
        //return $this->belongsTo('App\Models\Categoria');
        //return $this->hasOne('App\Models\Categoria', 'Categoria');
        return $this->belongsTo('App\Models\Categoria', 'category_id');
	}     
}
