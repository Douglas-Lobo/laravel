<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colecao;

class IndexController extends Controller
{
    public function index(){
        $qualidade      = Colecao::limit(1)->select('id', 'titulo', 'descricao', 'imagem', 'valor', 'venda','qualidade')->whereRaw('qualidade = (select max(qualidade) from colecaos )')->get();
        $registros      = Colecao::paginate(6);
        

        return view('index')->with(compact('qualidade', 'registros'));
    }

    public function add(){
        return view('adicionar');
    }

    public function salvar(Request $req){
           
        $dados = $req->all();

        if ( isset($dados['venda']) ) {
            $dados['venda'] = "sim";
        } else {
            $dados['venda'] = "nao";
        }
        
        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ext;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Colecao::create($dados);


    }

    public function edit($id){
        $registro = Colecao::find($id);

        return view('editar')->with(compact('registro'));
    }

    public function att(Request $req){
        
        $dados = $req->all();
        $id = $dados['id'];

        if ( isset($dados['venda']) ) {
            $dados['venda'] = "sim";
        } else {
            $dados['venda'] = "nao";
        }
        
        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ext;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Colecao::find($id)->update($dados);

        return  redirect()->route('list');

    }

    public function list(){
        $registros = Colecao::paginate(6);
        
        return view('listagem')->with(compact('registros'));
    }

    public function del($id){
        Colecao::find($id)->delete();
        return redirect()->route('list');
    }

    
}
