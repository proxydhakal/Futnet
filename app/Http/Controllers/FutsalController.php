<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Futsal;
class FutsalController extends Controller
{
    public function addfutsal(Request $request){
        $this->validate($request,[
            'fname'=>'required',
            'flocation'=> 'required',
            'fphone'=> 'required'
        ]);


        $futsal = new Futsal;
        $futsal->fname = $request->input('fname');
        $futsal->flocation = $request->input('flocation');
        $futsal->fphone = $request->input('fphone');
        $futsal-> save();

        return redirect('/add')->with('sucess','Futsal Added');
    }
    public function getFutsals(){

        $futsal =Futsal::paginate(15);
        return view('futsallist')->with('futsal',$futsal);
    }
}
