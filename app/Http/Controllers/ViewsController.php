<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Produto;
use Illuminate\Support\Facades\Session;

class ViewsController extends Controller
{

  public function home(){

    $produtos = Produto::all();

    return view('index',['produtos' => $produtos]);

  } // retorna a página inicial da aplicação

  public function getProdutos($categoria){

    $produtos = Produto::where('categoria',$categoria)->get();

    return view('index',['produtos' => $produtos]);

  } // retorna produtos da $categoria.

  public function getProduto($id){

    $produto = Produto::where('id',$id)->get();

    return view('produto',['produto' => $produto]);

  } // retorna página do produto com $id

  public function addCarrinho($id){

    Session::push('carrinho',$id);

    return redirect()->route('index');

  } // adiciona o produto de $id ao addCarrinho

  public function login(){

    return view('login');

  } // retorna tela de login

  public function compra(){

    return view('compra');

  } // retorna tela de compra

  public function processarPedido(Request $request){

    $itens = Session::get('carrinho');

    print_r($itens);

  } // processa o pedido e retorna mensagem avisando se ele foi confirmado ou não

  public function cadastro(){

    return view('cadastrar');

  } // retorna tela de cadastro

  public function recuperarSenha(){

    return view('recuperarSenha');

  } // retorna tela de recuperar senha


}
