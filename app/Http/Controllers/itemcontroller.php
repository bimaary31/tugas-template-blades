<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\itemmodel;

class itemcontroller extends Controller
{
    public function index(){
        $item = itemmodel:: get_all();
        dd($item);
        return view ('item.index', compact('item'));
    }
    public function create(){
    return view ('item.form');
    }
    public function pertanyaan(request $request){
        //dd($request->all());
        $data = $request ->all();
        unset($data["_token"]);
        //dd($data);
        $item= itemmodel::save($data);
       // dd($item);
        if($item){
            return view('item.index');
        }
        
    
        
    }

       

    
}
