<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use \Carbon\Carbon;

class UsuarioController extends Controller{

    public function login()
    {
        return view('login');
    }

    public function verificalogin()
    {

        $usuario = Request::input('usuario');
        $senha = Request::input('senha');

        $verificacao = DB::select('select * from usuario where email = ?  and senha = ?', [$usuario, $senha]);

        if(empty($verificacao)){
            return 'Usuário ou Senha Incorretos';
        }else{
            return implode(",", [$usuario, $senha]);
        }
    }

    public function novo()
    {
        return view('cadastro');
    }

    public function adicionar()
    {
        $nome = Request::input('nome');

        $senha = Request::input('senha');

        $email = Request::input('email');

        $data = Carbon::now();

        DB::insert('insert into usuario values (null, ?,?,?,?,?,?)', [$nome, $email, $senha, 'Ativo', $data, '1']);

        return view('login');
    }


}

?>