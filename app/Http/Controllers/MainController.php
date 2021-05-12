<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class MainController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function prodotti(){
        $vestiti = Dress::all();
        @dd($vestiti);
        $data = [
            'prodotti'=>$vestiti
        ];
        return view('prodotti',$data);
    }
}
