<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use  App\Categoria;
use  App\Produto;
use  App\Pedido;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function login(){

      if(Auth::check() && Auth::user()->tipo == 1){

        return redirect()->route('admin.home');

      }else{

        return view('admin');

      }

    }

    public function home(){

        $admins = User::where([['tipo','=',1],['id','<>',Auth::user()->id]])->orderBy('id')->get();
        $usuarios = User::where('tipo',0)->orderBy('id')->get();
        $produtos = Produto::orderBy('id')->get();
        $pedidos = Pedido::orderBy('id')->get();
        $categorias = Categoria::orderBy('id')->get();

        return view('admin.home',['admins' => $admins,'usuarios' => $usuarios,'produtos' => $produtos,'pedidos' => $pedidos,'categorias' => $categorias]);

    } // retorna a página principal do admin

    public function pesquisar(Request $request){

        if($request->pesquisa != NULL){

            $ids = explode(" ",$request->pesquisa);

            $where = array();

            foreach ($ids as $id) {

              $where[] = ['id','=',$id];

            }

            $produtos = Produto::where($where)->get();
            $usuarios = User::where($where)->get()->reject(function($user){

              return $user->tipo == 1;

            });
            $admins = User::where($where)->get()->reject(function($user){

              return $user->tipo == 0;

            });
            $categorias = Categoria::where($where)->get();
            $pedidos = Pedido::where($where)->get();

            return view('admin.home',['admins' => $admins,'usuarios' => $usuarios,'pedidos' => $pedidos,'produtos' => $produtos,'categorias' => $categorias]);


        }else{

            return redirect()->route('admin.home');

        }

    } // retorna entidades que possuam o $id

    public function cadastrar($entidade){

      $categorias = Categoria::all();
      $usuarios = User::where('tipo',0);
      return view('admin.cadastro.'.$entidade,['categorias' => $categorias, 'usuarios' => $usuarios]);


    } // página de cadastro de uma entidade

    public function confirmarCadastro(Request $request){

        switch($request->entidade){

            case 'usuario':
              $validar = $request->validate([
                'name' => 'required|unique:users',
                'email' => 'required|unique:users',
                'password' => 'required|min:6|max:30|confirmed',
                'tipo' => 'required',
              ]);

              $user = new User;

              $user->name = $request->name;
              $user->password = $request->password;
              $user->email = $request->email;
              $user->tipo = $request->tipo;

              $user->save();

              break;
            case 'categoria':
              $validar = $request->validate([
                'nome' => 'required|unique:categorias',
              ]);

              $categoria = new  Categoria;

              $categoria->nome = $request->nome;
              $categoria->save();

              break;
            case 'pedido':
              $validar = $request->validate([
                'user_id' => 'required',
                'valor' => 'required',
                'itens' => 'required',
              ]);

              $pedido = new  Pedido;

              $pedido->user_id = Auth::user()->id;

              $where = array();

              foreach($request->itens as $item){

                  $where[] = ['id','=',$item];

              }

              $pedido->valor = Produto::where('id','=',$where)->sum('valor');

              $pedido->save();

              foreach ($request->itens as $item) {
                $pp = new  PedidosProdutos;

                $pp->pedido_id = $pedido->id();
                $pp->produto_id = $item;

                $pp->save();

              }
              break;
            case 'produto':
              $validar = $request->validate([
                'nome' => 'required|unique:produtos',
                'categoria' => 'required|exists:categorias,nome',
                'valor' => 'required',
              ]);

              $produto = new  Produto;

              $produto->nome = $request->nome;
              $produto->categoria = $request->categoria;
              $produto->valor = $request->valor;

              $produto->save();
              break;

        }

        return redirect()->route('admin.home');

    } // efetua o cadastro de uma entidade

    public function confirmarEdicao(Request $request){

      switch($request->entidade){

          case 'usuario':
            $validar = $request->validate([
              'name' => 'required|unique:users',
              'email' => 'required|unique:users',
              'password' => 'required|min:6|max:30|confirmed',
              'tipo' => 'required',
            ]);

            $user = new  User;

            $user->name = $request->name;
            $user->password = $request->password;
            $user->email = $request->email;
            $user->tipo = $request->tipo;

            $user->save();

            break;
          case 'categoria':
            $validar = $request->validate([
              'nome' => 'required|unique:categorias',
            ]);

            $categoria = new  Categoria;

            $categoria->nome = $request->nome;
            $categoria->save();

            break;
          case 'pedido':
            $validar = $request->validate([
              'user_id' => 'required',
              'valor' => 'required',
              'itens' => 'required',
            ]);

            $pedido = new  Pedido;

            $pedido->user_id = Auth::user()->id;

            $where = array();

            foreach($request->itens as $item){

                $where[] = ['id','=',$item];

            }

            $pedido->valor = Produto::where('id','=',$where)->sum('valor');

            $pedido->save();

            foreach ($request->itens as $item) {
              $pp = new  PedidosProdutos;

              $pp->pedido_id = $pedido->id();
              $pp->produto_id = $item;

              $pp->save();

            }
            break;
          case 'produto':
            $validar = $request->validate([
              'nome' => 'required|unique:users',
              'categoria' => 'required|exists:categorias,nome',
              'valor' => 'required',
            ]);

            $produto = new  Produto;

            $produto->nome = $request->nomeproduto;
            $produto->categoria = $request->categoria;
            $produto->valor = $request->valor;

            $produto->save();
            break;

      }

      return redirect()->route('admin.home');


    } // efetua a edição da entidade

    public function editar($entidade,$id){

      $categorias = Categoria::all();
      $usuarios = User::where('tipo',0)->orderBy('id')->get();

      switch($entidade){
        case 'usuario':
          $item = User::where('id',$id)->get()->first();
          return view('admin.editar.'.$entidade,['item' => $item, 'usuarios' => $usuarios, 'categorias' => $categorias]);
          break;
        case 'produto':
          $item = Produto::where('id',$id)->get()->first();
          return view('admin.editar.'.$entidade,['item' => $item, 'usuarios' => $usuarios, 'categorias' => $categorias]);
          break;
        case 'pedido':
          $item = Pedido::where('id',$id)->get()->first();
          return view('admin.editar.'.$entidade,['item' => $item, 'usuarios' => $usuarios, 'categorias' => $categorias]);
          break;
        case 'categoria':
          $item = Categoria::where('id',$id)->get()->first();
          return view('admin.editar.'.$entidade,['item' => $item, 'usuarios' => $usuarios, 'categorias' => $categorias]);
          break;
      }

    } // página de edição de uma entidade da tabela

    public function deletar($entidade,$id){

      switch($entidade){
        case 'usuario':
           User::where('id','=',$id)->delete();
          break;
        case 'categoria':
           Categoria::where('id','=',$id)->delete();
          break;
        case 'pedido':
           Pedido::where('id','=',$id)->delete();
          break;
        case 'produto':
           Produto::where('id','=',$id)->delete();
          break;

      }

    } // deleta uma entidade da tabela

    public function verItem($entidade,$id){

      switch ($entidade) {
        case 'usuario':
          $item = User::where('id',$id)->get()->first();
          return view('admin.itens.'.$entidade,['item' => $item]);
          break;
        case 'produto':
          $item = Produto::where('id',$id)->get()->first();
          return view('admin.itens.'.$entidade,['item' => $item]);
          break;
        case 'categoria':
          $item = Categoria::where('id',$id)->get()->first();
          return view('admin.itens.'.$entidade,['item' => $item]);
          break;
      }

    }
}
