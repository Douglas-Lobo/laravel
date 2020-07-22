@extends('layout.site')
@section('titulo', 'Principal')

@section('conteudo')
<main>

    <div class='container'>
        
        <form action="{{ route('att') }}" method="post" enctype='multipart/form-data'>
            @csrf
            @include('form')


        </form>

    </div>
             
</main>

@endsection  
    




 