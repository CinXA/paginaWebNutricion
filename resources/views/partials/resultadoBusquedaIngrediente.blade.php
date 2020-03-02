@extends('templates.layout')
@section('content')

    <section class="container-fluid py-3">
        <div class="title-text py-2">
            <h2>Resultado de su busqueda de <b>"{{$busqueda}}"</b></h2>
        </div>
        <div class="row" style="padding: 2%">

            @if($bandera1!='false' or $bandera2!='false')
                <table class="table table-striped">
                    <tbody>
                    @foreach ($recetas as $receta)
                        <tr>
                            <td style="width:115px;height: 115px"><img src="{{asset('').$receta['foto_final']}}"
                                                                       class="mr-3" width="110px" height="100px"></td>
                            <td>{{ $receta->nombre_receta }}</td>
                            <td>{{ $receta->desc_receta }}</td>
                            <td><a class="receta-completa float-md-right"
                                   href="{{url('recetaCompletas',$receta['id'])}}">Ver receta</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-warning">No se encontraron resultados</div>

            @endif
        </div>


    </section>


@endsection