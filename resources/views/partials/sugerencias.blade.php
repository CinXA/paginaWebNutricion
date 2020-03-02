<div class="float-md-right justify-content-center  justify-content-md-start p-3 mb-2 bg-success"
     style="width: 20%;height: 60%; padding-right: 2%; padding-top: 10%">

    <div class="title-text alert alert-success">
        <div class="clearfix"><span>Sugerencias</span></div>
    </div>

    <div class="row align-items-sm-start">
        <div class="col-4 ">
        @foreach($sugerencias as $s)
            <p>{{$s['nombre_receta']}}</p>
            @endforeach
        </div>

    </div>

</div>