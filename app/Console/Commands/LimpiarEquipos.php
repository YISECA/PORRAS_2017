<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Redirect;
use Validator;
use session;
use App\Form;
use Carbon\Carbon;

class LimpiarEquipos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'limpiar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        date_default_timezone_set('America/Bogota');

        $no_validos = Form::where(['estado' => 0])->get();
         foreach($no_validos as $equipo)
        {   
            $Fecha_creacion = $equipo->created_at;

            $now = Carbon::now();

            $date = date('Y-d-m h:i:s');

            $end_date = Carbon::parse($Fecha_creacion);

            $lengthOfAd = $end_date->diffInHours($now);

            //echo $lengthOfAd;
            if($lengthOfAd>32){
               //$equipo->delete();
            }
        }
       
       
    }
}
