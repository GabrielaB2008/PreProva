<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
   @if (auth()->check() == true)
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Loja</a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer"
                    data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                    <div class="drawer-body mb-2 md:mb-0">
                        <ul class="nav navbar-nav me-auto">
                            <li class="nav-item">
                                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                                    Categoria
                                </button>
                                <div class="menu">
                                    <a class="menu-item" href="/categoria/create">Nova Categoria</a>
                                    <a class="menu-item" href="/categoria">Categorias Cadastradas</a>
                                </div>
                            </li> 
                            <li class="nav-item">
                                <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                                    Produto
                                </button>
                                <div class="menu">
                                    <a class="menu-item" href="/categoria/create">Novo Produto</a>
                                    <a class="menu-item" href="/categoria">Proutos Cadastrados</a>
                                </div>
                            </li>  
                        </ul>
                        
                    </div>
                </dialog>
            </div>
        </nav>
    @endif


    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
    {{ $slot }}
</body>

</html>
