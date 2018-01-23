<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(){

      return view('admin');

    }

    public function home(){


    } // retiorna a página principal do admin

    public function pesquisar(Request $request){} // retorna entidades que possuam o $id

    public function cadastrar($categoria,$id){} // página de cadastro de uma entidade

    public function confirmarCadastro(Request $request){} // efetua o cadastro de uma entidade

    public function confirmarEdicao(Request $request){} // efetua a edição da entidade

    public function editar($categoria,$id){} // página de edição de uma entidade da tabela

    public function deletar($categoria,$id){} // deleta uma entidade da tabela


}
