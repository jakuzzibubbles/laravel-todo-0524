<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //HomeController@index
    public function index(){

        //hole die Daten aus einer DB
        $vorname = 'Linh';
        $nachname = 'Nguyen';
        
        
        $data = array(1,2,3,4,5,56,67,78,89);
        
        $user = ['name'=>['name'=>'Ivan', 'email'=>'"code@zentralweb.de"'], 'email'=>'"code@zentralweb.de"'];
        

        $egal_php = "test wert";

        return view('welcome3', ['daten'=>$data, 
        'name'=>'Ivan', 
        'users'=>$user, 
        'egal_blade'=>$egal_php, 
        'vorname' => $vorname,
        'nachname'=>$nachname]);

    }

    public function wert1(Request $request){
        
        //print_r($request->input('wert'));
        
        $vorname = $request->input('vorname');
        $nachname = $request->input('nachname');

        dd($vorname, $nachname);

        //schreibe die daten in die datenbank
        
    }
}
