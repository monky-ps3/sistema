<?php
namespace App\Controllers;

use App\Models\Medico_Model;
class Medico extends BaseController
{
    
    public function index()
    {
        return view('welcome_message');
    }
    public function altamedico(){
        $medico = new Medico_Model();
        $data['medicos']=$medico->orderBy('id_medico','Des')->findAll();
      print_r( $data);
        //insertmedico
    }

    public function id(){
        $medico = new Medico_Model();
        $medicox= $medico->findAll();
         print_r($medicox);
    }
}
