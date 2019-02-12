<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    //protected $table = 'towns';

    protected $fillable = ['name','state_id'];


    //CLAVE PARA LA CONSULKTA y RETORNO DE VALORES DE LA BD
    //PARECIDO A UNA CLASE TOWNS
    public static function towns($id){
    	return Town::where('state_id','=',$id)
    	->get();
    }
}
