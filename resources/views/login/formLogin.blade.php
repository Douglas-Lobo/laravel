@extends('layout.site')
@section('titulo', 'Principal')

@section('conteudo')
<main>

    <div class='container'>

        @if( $errors->all() )
            @foreach($errors->all() as $error)
                <div class='row'>
                    <div class='col l4 offset-l4'>
                        <div class="card-panel red  center">{{$error}}</div>
                    </div>
                </div>
            @endforeach
        @endif
        
        <form action="{{ route('login.logar') }}" method="post" >
                @csrf
                <div class="row">
                    <div class="input-field col l4 offset-l4">
                    <i class="material-icons prefix">mail</i>
                    <input name="email" type="email" class="validate" required>
                    <label for="email">E-mail</label>
                    </div>
                </div>

                <div class='row'>
                    <div class="input-field col l4 offset-l4">
                    <i class="material-icons prefix">lock</i>
                    <input name="password" type="password" class="validate" required>
                    <label for="password">Senha</label>
                    </div>
                </div>
                <div class='row'>

                    <div class='col l2 offset-l4'>
                          <a class="waves-effect waves-teal btn-flat">Cadastrar</a>
                    </div>

                    <div class='col l3'>
                        <button class="btn waves-effect waves-light" type="submit" >Entrar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>

                </div>

    
        </form>

    </div>
             
</main>

@endsection  
    




 