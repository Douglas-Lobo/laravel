@extends('layout.site')
@section('titulo', 'Listagem')

@section('conteudo')
<main>

    <div class='container'>
        
        <div class='row' >
                <table class='highlight'>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Descriçao</th>
                            <th>Imagem</th>
                            <th>Publicado</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->titulo }}</td>
                            <td>{{ $registro->descricao }}</td>
                            <td><img width="100" height='100' src="{{ asset($registro->imagem) }}" alt="{{ $registro->titulo }}" ></td>
                            <td>{{ $registro->venda }}</td>
                            <td>
                                <a class='btn deep-orange waves-effect waves-light' href="{{ route('edit', $registro->id) }}">Editar</a>
                                <a class='btn red waves-effect waves-light' href="{{ route('del', $registro->id) }}">Deletar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
            </div>

            {{ $registros->links() }}

    </div>
             
</main>

@endsection  
    




 