<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categoria;
use App\Produto;
use App\Pedido;

class AdminController extends Controller
{

    public function login(){

      return view('admin');

    }

    public function home(){

        $admins = User:where('tipo',1)->orderBy('id');
        $usuarios = User::where('tipo',0)->orderBy('id');
        $produtos = Produto::all()->orderBy('id');
        $pedidos = Pedido::all()->orderBy('id')
        $categorias = Categorias::all()->orderBy('id');

        return view('admin.home',['admins' => $admins,'usuarios' => $usuarios,'produtos' => $produtos,'pedidos' => $pedidos,'categorias' => $categorias]);

    } // retorna a página principal do admin

    public function pesquisar(Request $request){

        ///

    } // retorna entidades que possuam o $id

    public function cadastrar($entidade){

      $categorias = Categoria::all();
      $usuarios = User::where('tipo',0);
      return view('admin.cadastro.'.$entidade);


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
