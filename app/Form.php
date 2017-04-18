<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Form extends Model

{

    //



<<<<<<< HEAD
<<<<<<< HEAD
   protected $table = 'porras_2017';
=======
   protected $table = 'semana_santa_9am';
>>>>>>> master
=======
   protected $table = 'semana_santa_9am';
>>>>>>> master



   public function ciudad(){

	

	return $this->belongsTo('App\Ciudad','id_ciudad');



   }

    public function pais(){

	

	return $this->belongsTo('App\Pais','id_pais');



   }

    public function departamento(){

	

	return $this->belongsTo('App\Departamento','id_departamento');



   }



}



