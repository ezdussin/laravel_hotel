<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospedes;

class HospedesController extends Controller
{
    function listarHospedes(){
        $hospedes = Hospedes::all();
        echo json_encode($hospedes);
    } 

    function inserirHospedes(Request $request){
        $insert = Hospedes::create($request->all());

        if($insert){
            return response('Dados inseridos', 201);
        } else {
            return response('Erro ao inserir dados', 406);
        }
    }

    function removerHospedes($id){
        $remover = Hospedes::where('id', $id)->delete();
        
        if($remover){
            return response('Dados removidos', 201);
        } else {
            return response('Erro ao remover dados', 406);
        }
    }
}
