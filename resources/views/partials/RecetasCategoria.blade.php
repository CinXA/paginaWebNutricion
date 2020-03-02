@extends('templates.layout')
@section('content')

    <section class="container-fluid py-3">
        <div class="title-text py-2">
            <h2 class="text-uppercase">{{$nom}}</h2>
        </div>
        @if($bandera==false)
            <div><h3>Estamos trabajando en ello, gracias por la comprension</h3></div>
        @elseif($bandera==true)
        <div class="row" style="padding: 2%">

            <table class="table table-striped">

                <tbody>
                @foreach ($recetasC as $receta)
                    <tr>
                        <td style="width:115px;height: 115px"><img src="{{asset('').$receta['foto_final']}}"
                                                                   class="mr-3" width="110px" height="100px"></td>
                        <td>{{ $receta->nombre_receta }}</td>
                        <td>{{ $receta->desc_receta }}</td>
                        <td><a class="receta-completa float-md-right" href="{{url('recetaCompletas',$receta['id'])}}">Ver
                                receta</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
            @endif


    </section>


@endsection