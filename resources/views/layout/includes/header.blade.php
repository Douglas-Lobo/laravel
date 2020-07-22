<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>@yield('titulo')</title>
    </head>

    <style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }

      main {
        flex: 1 0 auto;
      }

    </style>

    <body>
    
    <header> 
        <nav>
          <div class="nav-wrapper">
            <a href="{{ route('index') }}" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              @if( Auth::guest() )
              <li><a href="{{ route('login.formLogin') }}">Entrar</a></li>
              @else
              <li>    
                <div class="chip">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/240px-User_icon_2.svg.png" alt="Contact Person">
                  {{ Auth::user()->name }}
                </div>
              </li>
              <li><a href="{{ route('list') }}">Listagem</a></li>
              <li><a href="{{ route('login.sair') }}">Sair</a></li>
              @endif
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">Javascript</a></li>
              <li><a href="mobile.html">Mobile</a></li>
            </ul>
          </div>
      </nav>
  </header>
      
