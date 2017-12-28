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

      function getVestuario(){


      }

      function getEletroeletronicos(){

        return view("produtos/eletroeletronicos/index");

      }

      function getFerramentas(){


      }

      function getMiscelania(){

          return view("produtos/miscelania/index");

      }

      function getProdutos(){
        return view("produto")->with("produtos",$this->produto->all());
      }

      function getCalcados(){
          return view("produtos/vestuario/calcado")->with("produtos",$this->produto->where("categoria","calcado"));
      }

      function getCalcas(){
          return view("produtos/vestuario/calca")->with("produtos",$this->produto->where("categoria","calca"));
      }

      function getCamisas(){
          return view("produtos/vestuario/camisa")->with("produtos",$this->produto->where("categoria","camisa"));
      }

      function getDesktops(){
          return view("produtos/eletroeletronicos/desktop")->with("produtos",$this->produto->where("categoria","desktop"));
      }

      function getNotebooks(){
          return view("produtos/eletroeletronicos/notebook")->with("produtos",$this->produto->where("categoria","notebook"));
      }

      function getSmartphones(){
          return view("produtos/eletroeletronicos/smartphone")->with("produtos",$this->produto->where("categoria","smartphone"));
      }

      function getCameras(){
          return view("produtos/eletroeletronicos/camera")->with("produtos",$this->produto->where("categoria","camera"));
      }

      function getDrones(){
          return view("produtos/eletroeletronicos/drone")->with("produtos",$this->produto->where("categoria","drone"));
      }

      function getFornos(){
          return view("produtos/eletroeletronicos/forno")->with("produtos",$this->produto->where("categoria","forno"));
      }

      function getGeladeiras(){
          return view("produtos/eletroeletronicos/geladeira")->with("produtos",$this->produto->where("categoria","geladeira"));
      }

      function getCafeteiras(){
          return view("produtos/eletroeletronicos/cafeteira")->with("produtos",$this->produto->where("categoria","cafeteira"));
      }

      function getMarcenaria(){
          return view("produtos/ferramentas/marcenaria")->with("produtos",$this->produto->where("categoria","marcenaria"));
      }

      function getAlvenaria(){
          return view("produtos/ferramentas/alvenaria")->with("produtos",$this->produto->where("categoria","alvenaria"));
      }

      function getJardinagem(){
          return view("produtos/ferramentas/jardinagem")->with("produtos",$this->produto->where("categoria","jardinagem"));
      }

      function getBrinquedos(){
          return view("produtos/miscelania/brinquedo")->with("produtos",$this->produto->where("categoria","brinquedo"));
      }

      function getLivros(){
          return view("produtos/miscelania/livro")->with("produtos",$this->produto->where("categoria","livro"));
      }

      function getDecoracoes(){
          return view("produtos/miscelania/decoracao")->with("produtos",$this->produto->where("categoria","decoracao"));
      }

}
