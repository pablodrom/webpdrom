<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\motion;

class MotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $motions = motion::all();
        return view('motions.index', compact('motions'));
    }

    public function create(){
        return view('motions.create');
    }

    public function sendData(Request $request){
        $rules = [
            'detacomp' => 'required|min:5'
        ];
        
        $messages = [
            'detacomp.required' => 'El detalle de compra es obligatorio.',
            'detacomp.min' => 'El Detalle de compra debe tener minimo 5 caracteres.'
        ];

        $this->validate($request, $rules, $messages);
        
        $motion = new motion();
        $motion->fechacomp = $request->input('fechacomp');
        $motion->detacomp = $request->input('detacomp');
        $motion->plancomp = $request->input('plancomp');
        $motion->totcuota = $request->input('totcuota');
        $motion->imptotal = $request->input('imptotal');
        $motion->impcuota = $request->input('impcuota');

        $motion->save();

        return redirect('/movtjvisa');

    }
}
