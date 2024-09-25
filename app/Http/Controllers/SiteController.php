<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index() {
        // return view('welcome');
        $nome = 'Nome Teste';
        $idade = 90;

        $data = [
            'apelido' => $nome,
            'idade' => $idade,
        ];

        return view('welcome', $data);
    }

    public function users(Request $r) {

        $data = [
            'quantidade' => $r->qnt,
        ];

        return view('usuarios', $data);
    }

    public function sair() {
        return view('sair');
    }
}
