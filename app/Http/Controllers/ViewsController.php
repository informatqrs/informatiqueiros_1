<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Produto;

class ViewsController extends Controller
{

  public function home(){} // retorna a página inicial da aplicação

  public function getProdutos(){} // retorna produtos da $categoria.

  public function getProduto(){} // retorna página do produto com $id

  public function addCarrinho(){} // adiciona o produto de $id ao addCarrinho

  public function produto(){} // retorna tela de produto

  public function login(){} // retorna tela de login

  public function compra(){} // retorna tela de compra

  public function processarPedido(){} // processa o pedido e retorna mensagem avisando se ele foi confirmado ou não

  public function cadastro(){} // retorna tela de cadastro

  public function recuperarSenha(){} // retorna tela de recuperar senha


}
