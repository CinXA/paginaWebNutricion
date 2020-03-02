<nav class="navbar navbar-dark navbar-expand-lg bg-primary navbar-green" style=" padding-right: 5%; padding-left: 5%">
    <a class="navbar-brand" href="#"><img src="{{asset('img/icons/logoN.png')}}" width="60" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" href="{{route('inicio')}}">
                <a class="nav-link" href="/">Inicio </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('recetas')}}">Recetas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('categorias')}}">Categorias</a>
            </li>
        </ul>
    </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline ml-auto" method="POST" action="{{ route('busqueda') }}">
                @csrf

                <input id="nombre" type="text"
                       class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                       name="nombre" value="{{ old('nombre') }}"
                       required autofocus>
                @if ($errors->has('nombre'))
                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                            </span>
                @endif
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="input-group" id="adv-search">
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"><span class="caret">Filtrar </span></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">

                                    <div class="form-group">
                                        <label for="filter">Filtar por Ingrediente</label>
                                        <form class="form" method="POST"
                                              action="{{ route('busquedaI') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="i1">Ingrediente 1</label>
                                                <input id="i1" type="text"
                                                       class="form-control{{ $errors->has('i1') ? ' is-invalid' : '' }}"
                                                       name="i1" value="{{ old('i1') }}"
                                                       required autofocus>
                                                @if ($errors->has('i1'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('i1') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="i2">Ingrediente 2</label>
                                                <input id="i2" type="text"
                                                       class="form-control{{ $errors->has('i2') ? ' is-invalid' : '' }}"
                                                       name="i2" value="{{ old('i2') }}"
                                                       required autofocus>
                                                @if ($errors->has('i2'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('i2') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn btn-primary"> Buscar por ingrediente
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</nav>