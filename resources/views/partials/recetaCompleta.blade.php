@extends('templates.layout')
@section('content')

    <section class="container-fluid py-3">

        <div class="text-center">
            <h1 class="display-4 text-uppercase">{{$receta->nombre_receta}}</h1>
        </div>
        <div class="container">
            <p class="h4 font-weight-lighter"><u>Ingredientes:</u></p>

            <ul>

                <div>
                    @foreach($collection as $col)
                        <div>
                            <li>{{$col['cantidad_ingrediente']}} {{$col['nombre_ingrediente']}}</li>
                        </div>
                    @endforeach
                </div>

            </ul>
        </div>
        <div class="container">
            <p class="h4 font-weight-lighter"><u>Procedimiento:</u></p>
            @foreach($pasos as $paso)
                <div>
                    <p>{{$paso['no_paso']}} {{$paso['descripcion']}} </p>
                </div>
                <div class="text-center">
                    @if($paso['foto']!='')
                    <img class="img-responsive center-block" src="{{asset('').$paso['foto']}}" width="245" height="180"
                         alt="Card image cap">
                        @endif
                </div>
            @endforeach
        </div>


    </section>


@endsection