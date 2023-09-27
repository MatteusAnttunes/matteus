<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
      <link rel="stylesheet" href="/css/styles.css">
        
        <!--fonte-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
        
          

         </style>


    </head>
    <body>

        <header>

        <nav class="navbar navbar-expand-lg nav">
            <div class="collapse navnbar-collapse" id="navbar"></div>
            <a href="/" class="navbar-brand">
            <img src="/img/Black & White.png" alt="TCC Matteus">
            </a>
                
                <li class="nav-item">
                    <a href="/jogo/create" class="nav-link">Registrar Jogos</a>
                </li>

                @auth
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Seus Jogos</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                    @csrf
                <a href="/logout" 
                    class="nav-link" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                >
                    Sair
                </a>
                    </form>
                </li>
                @endauth

                @guest
              
                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>

                @endguest
            </ul>
        </nav>

        </header>   
        <main>
            <div class="conteiner-fluid">
                <div class="row">
                 @if (session('msg'))
                 <p class="msg">{{ session('msg') }}</p>
                 @endif

                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <p> TCC "HUB DE JOGOS" &copy; 2023 </p>

        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
