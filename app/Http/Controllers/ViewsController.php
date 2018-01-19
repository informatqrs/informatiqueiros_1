<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Produto;

class ViewsController extends Controller
{

  public function admin(){

      return view('admin');


  }

  public function adminHome(){

    if(Auth::check() && Auth::user()->tipo == 1){

      $admins = User::where('tipo','=',1)->get();
      $produtos = Produto::all();

      return view('admin.home',['admins' => $admins, 'produtos' => $produtos]);

    }else{

      return redirect('/');

    }

  }

  public function getCamisas(){} // devolve tela com todos os produtos do tipo 'camisas'

  public function getCalcas(){} // devolve tela com todos os produtos do tipo 'calcas'

  public function getCalcados(){} // devolve tela com todos os produtos do tipo 'calcados'

  public function getFornos(){} // devolve tela com todos os produtos do tipo 'fornos'

  public function getCafeteiras(){} // devolve tela com todos os produtos do tipo 'cafeteiras'

  public function getGeladeiras(){} // devolve tela com todos os produtos do tipo 'geladeiras'

  public function getCameras(){} // devolve tela com todos os produtos do tipo 'cameras'

  public function getDesktops(){} // devolve tela com todos os produtos do tipo 'desktops'

  public function getNotebooks(){} // devolve tela com todos os produtos do tipo 'notebooks'

  public function getSmartphones(){} // devolve tela com todos os produtos do tipo 'smartphones'

  public function getMarcenaria(){} // devolve tela com todos os produtos do tipo 'marcenaria'

  public function getAlvenaria(){} // devolve tela com todos os produtos do tipo 'alvenaria'

  public function getJardinagem(){} // devolve tela com todos os produtos do tipo 'jardinagem'

  public function getBrinquedos(){} // devolve tela com todos os produtos do tipo 'brinquedos'

  public function getLivros(){} // devolve tela com todos os produtos do tipo 'livros'

  public function getDecoracoes(){} // devolve tela com todos os produtos do tipo 'decoracoes'

  public function getProduto($id){} // devolve tela do produto com o $id

  public function comprar(){} // devolve tela de compras

  public function confirmar(){  echo "confirmar"; } // processa pedido de confirmação de compra

  public function cadastrar(){

    echo "cadastrar";

  }
}
