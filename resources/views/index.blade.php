@extends('layout.site')
@section('titulo', 'Principal')

@section('conteudo')
<main>
    <div class='container'>
    <h5 class='flow-text center'>Mais curtida</h5> 
        <div class='row'>
        @foreach($qualidade as $quali)
            <div class="col l6 m6 s6 offset-l3">
                <div class="card large hoverable">
                    <div class="card-image">
                    <img class="materialboxed" src="{{ asset($quali->imagem) }}">
                    <span class="card-title">{{$quali->titulo}}</span>
                    </div>
                    <div class="card-content">
                    <p>{{$quali->descricao}}</p>
                    </div>
                    <div class="card-action">
                    <a href="#">Comprar</a>
                    </div>
                </div>
            </div> 
        @endforeach
        </div>
    </div>

<h5 class='flow-text center'>Acervo</h5> 
<div class='row'>
            @foreach($registros as $registro)
            
                    <div class="col l2 m6 s6">
                        <div class="card small hoverable">
                            <div class="card-image">
                            <img class="materialboxed" src="{{ asset($registro->imagem) }}">
                            <span class="card-title">{{$registro->titulo}}</span>
                            </div>
                            <div class="card-content">
                            <p>{{$registro->descricao}}</p>
                            </div>
                            <div class="card-action">
                            <a href="#">Comprar</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

       <div class='row'>
            {{ $registros->links() }}
       </div>

      
        


</main>

@endsection  
    




 