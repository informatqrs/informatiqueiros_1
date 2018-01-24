<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(){

      return view('admin');

    }

    public function home(){

        return view('admin.home');

    } // retiorna a página principal do admin

    public function pesquisar(Request $request){

        ///

    } // retorna entidades que possuam o $id

    public function cadastrar($entidade){

      return view('admin.cadastrar'.$entidade);


    } // página de cadastro de uma entidade

    public function confirmarCadastro(Request $request){

        switch($request->entidade){

            ///

        }

    } // efetua o cadastro de uma entidade

    public function confirmarEdicao(Request $request){

        $request->validate([

          ///

        ]);


    } // efetua a edição da entidade

    public function editar($entidade,$id){

      switch($entidade){

        ///


      }

    } // página de edição de uma entidade da tabela

    public function deletar($entidade,$id){

      switch($entidade){

          ///

      }

    } // deleta uma entidade da tabela


}
