@extends('templates.layout')
@section('content')

    <div class="float-md-right justify-content-center  justify-content-md-start p-3 mb-2 bg-success"
         style="width: 20%;height: 60%; padding-right: 2%; padding-top: 10%">

        <div class="title-text alert alert-success">
            <div class="clearfix"><span>Sugerencias</span></div>
        </div>

        <div class="row align-items-sm-start">

                        <ul>
                                @foreach($sugerencias as $s)
                                    <div>
                                        <li><h5 class="card-title">{{$s['nombre_receta']}}</h5>
                                            <p class="card-text">{{$s['desc_receta']}}</p>
                                            <a class="receta-completa btn btn-info" href="{{url('recetaCompletas',$s['id'])}}">Ver
                                                receta</a></li>
                                        <p></p>
                                    </div>
                                @endforeach
                        </ul>

        </div>

    </div>
    <!--inicio video-->
    <nav aria-label="Page navigation example" style="margin: 2%">
        <ul class="pagination justify-content-center">
            <video autoplay="true" width="640" height="360" controls>
                <source src="/img/videos/video_presentacion.mp4" type="video/mp4">
                Tu navegador no soporta HTML5 video.
            </video>
        </ul>
    </nav>

    <!--final video-->

    <!--Recetas-->
    <section class="container-fluid py-3" style=" padding: 5%;">
        <div class="title-text py-2">
            <h2 class="text-uppercase">RECETAS</h2>
        </div>
        <div class="card-columns" data-current="0">
            @foreach($recetas as $receta)
                <div class="card start-card">
                    <img class="card-img-top" src="{{asset('').$receta['foto_final']}}" width="245" height="180"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$receta['nombre_receta']}}</h5>
                        <p class="card-text">{{$receta['desc_receta']}}</p>
                        <a class="receta-completa float-md-right" href="{{url('recetaCompletas',$receta['id'])}}">Ver
                            receta</a>

                    </div>
                </div>
            @endforeach
        </div>
    </section>


@endsection