<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

      private $produto;

      function __construct(Produto $produto){
          $this->produto = $produto;
      }

      function getProdutos(){
        return view("produto")->with("produtos",$this->produto->all());
      }

      function getCalcados(){
          return view("produto")->with("produtos",$this->produto);
      }

      function getCalcas(){

      }

      function getCamisas(){

      }

      function getDesktops(){

      }

      function getNotebooks(){

      }

      function getSmartphones(){

      }

      function getCameras(){

      }

      function getDrones(){

      }

      function getFornos(){

      }

      function getGeladeiras(){

      }

      function getCafeteiras(){

      }

      function getMarcenaria(){

      }

      function getAlvenaria(){

      }

      function getJardinagem(){

      }

      function getBrinquedos(){

      }

      function getLivros(){

      }

      function getDecoracoes(){

      }

}
