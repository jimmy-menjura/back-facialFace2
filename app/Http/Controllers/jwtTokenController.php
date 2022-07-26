<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jwtToken;

class jwtTokenController extends Controller
{
    public function getAll()
    {
    	$registro = jwtToken::all();
    	return $registro;
    }
    public function add(Request $request)
    {
    	$registro = jwtToken::create($request->all());
    	return $registro;
    }
    public function get($id){
        $registro = jwtToken::find($id);
        return $registro;
    }
    public function editar($id, Request $request){
        $registro = $this->get($id);
        $registro->fill($request->all())->save();
        return $registro;
    }
    public function eliminar($id){
        $registro = $this->get($id);
        $registro->delete();
        return $registro;
    }
}
