<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class LocacaoController extends Controller{

    public function aloca(){
        $locacao = DB::select('select * from local');
        
        return view("locacao")->with("locacao", $locacao);
    }

    public function mostra(){
        $id = Request::route('id', '0');

        $resposta = DB::select('select * from local where id = ?',[$id]);
        
        if(empty($resposta)) {
            return "Essa locação não existe";
        }
        return view("detalhes")->with("l", $resposta[0]);
    }

    public function novo(){
        return view('formulario');
    }

    public function adiciona(){
        $m = [];
        $aulas = ['m','v','n'];
        foreach($aulas as $aula){
            for($i = 1; $i <= 6; $i++){
                $m[$aula.$i] = Request::input($aula.$i);
            }
        }
        $data = Request::input("data");
        DB::insert("insert into locacao values ('".date("Y-m-d")."', ?, ?, ?)", [$data]);
        return $m;
    }
}

?>