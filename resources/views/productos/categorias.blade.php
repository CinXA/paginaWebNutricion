@extends('templates.layout')
@section('content')
    <div class="text-center">
        <h2 class="text-uppercase">Categorias</h2>
    </div>
    <section class="container-fluid py-3" style="margin: 3%;">
        <div class="card-columns">
            @foreach($categorias as $categoria)
                <div class="card image" >
                        <img class="card-img-top" src="{{asset('').'img/producto/cate.jpg'}}" alt="Card image" style="width:100%;opacity:0.5">
                    <div class="card-img-overlay">
                        <div class="card-body"></div>
                        <div class="card-footer">
                        <h2>{{$categoria['nombre_categoria']}}</h2>
                            <a class="categoria-receta btn btn-info" href="{{url('categoriaRecetas',$categoria['id'])}}">Ver
                                recetas</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

            <nav aria-label="Page navigation example" style="margin: 2%">
                <ul class="pagination justify-content-center">
                    {{ $categorias->links() }}
                </ul>
            </nav>
    </section>
@endsection