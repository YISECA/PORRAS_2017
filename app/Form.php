<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Form extends Model

{

    //
  protected $table = 'porras_2017';




   public function rangoEdad(){	

	     return $this->belongsTo('App\Edad','edad');

   }



}



