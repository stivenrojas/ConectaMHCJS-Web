@extends('layouts.adminlayout')
@section ('content')
<style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
    @import url("http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

    *, *:before, *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    h1 {
        padding: 50px 0;
        font-weight: 400;
        text-align: center;
    }

    p {
        margin: 0 0 20px;
        line-height: 1.5;
    }

    main {
        min-width: 920px;
        max-width: 900px;
        padding: 50px;
        margin: 0 auto;
        background: #fff;
    }

    section {
        display: none;
        padding: 20px 0 0;
        border-top: 1px solid #ddd;
    }

    .custom-radio{
        display:none;
    }

    .custom-radio:checked + label {
        color: #555;
        border: 1px solid #ddd;
        border-top: 2px solid black;
        border-bottom: 1px solid #fff;
    }

    .custom-label {
        display: inline-block;
        margin: 0 0 -1px;
        padding: 15px 25px;
        font-weight: 600;
        text-align: center;
        color: #bbb;
        border: 1px solid transparent;
    }

    .custom-label:before {
        font-family: fontawesome;
        font-weight: normal;
        margin-right: 10px;
    }


    .custom-label:hover {
        color: #888;
        cursor: pointer;
    }

    #tab1:checked ~ #content1,
    #tab2:checked ~ #content2,
    #tab3:checked ~ #content3 {
        display: block;
    }

    .custom-textfield{
        width: 100%;
        font-size:18px;
    }

    .custom-textarea{
        width: 100%;
        font-size:18px;
        height: 100px;
    }

    .custom-textarea2{
        width: 100%;
        font-size:18px;
        height: 600px;
    }

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<main>
    <strong> Administrar Elementos QR </strong><br><br>
    <input id="tab1" type="radio" class="custom-radio" name="tabs" checked>
    <label for="tab1" class="custom-label">Buscar Elemento QR</label>

    <input id="tab2" type="radio" class="custom-radio" name="tabs">
    <label for="tab2" class="custom-label">Añadir Elemento QR</label>


    <section id="content2">
    
        <div>
            {!! Form::open(['url' => 'admin/elemqr/agregar']) !!}
                <div class="form-group">
                {{Form::label('nombre_eleqr', 'Nombre del Elemento QR:')}}
                {{Form::text('nombre_eleqr', '',['class' => 'form-control','placeholder'=> 'Nombre del Elemento QR'])}}
                </div>

                <div class="form-group">
                {{Form::label('descripcion_eleqr', 'Descripción del Elemento QR:')}}
                {{Form::textarea('descripcion_eleqr', '',['class' => 'form-control','placeholder'=> 'Descripcion del Elemento QR'])}}
                </div>

                <div class="form-group">
                {{Form::label('url_imagen_eleqr', 'Dirección url de la imagen del Elemento QR:')}}
                {{Form::text('url_imagen_eleqr', '',['class' => 'form-control','placeholder'=> 'Dirección url de imagen'])}}
                </div>
                <div>
                {{Form::submit('Añadir',['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>

    </section>

    <section id="content1">
        
        @if(count($elementos) > 0)
            <div class="form-group">
                {!! Form::open(['method'=>'GET','url'=>'/admin/elemqr','role'=>'search'])  !!}
                    {{Form::text('search')}}
                    {{Form::submit('Buscar', ['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
            <div style="overflow-y:scroll;width: auto; height:500px;" >
                <table class="table table-striped table-hover">
                    <tr>
                        <th><strong>Nombre</strong></th>
                        <th><strong>Imagen</strong></th>
                        <th><strong>QR</strong></th>
                        <th></th>
                        <th></th>
                        @foreach($elementos as $elemento)
                                <tr>
                                    <th>{{ $elemento->nombre_elemqr }}</th>
                                    <th><img src="{{ $elemento->url_img_elemqr }}" width="25%"></th>
                                    <th>/api/qr/elemqr/{{ $elemento->id_elemqr }}</th>
                                    <th>
                                        {!! Form::open(['url' => ['/admin/elemqr', $elemento->id_elemqr, 'editar'], 'method' => 'GET']) !!}
                                            {{Form::submit('Editar',['class'=>'btn btn-primary'])}}
                                        {!! Form::close() !!}
                                    </th>
                                    <th>
                                        {!! Form::open(['url' => ['/admin/elemqr', $elemento->id_elemqr], 'method' => 'POST']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('X',['class'=>'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </th>
                                </tr>  
                        @endforeach
                    </tr>
                </table>
            </div>
        @else
            {!! Form::open(['method'=>'GET','url'=>'/admin/elemqr','role'=>'search'])  !!}
                {{Form::text('search')}}
                {{Form::submit('Buscar',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            <br>
            <strong> No se encontraron elementos. </strong>
            <br>
            <br>
            <table class="table table-striped table-hover">
                    <tr>
                            <th><strong>Nombre</strong></th>
                            <th><strong>Imagen</strong></th>
                            <th><strong>QR</strong></th>
                            <th></th>
                            <th></th>
                    </tr>
            </table>
        @endif

    </section>

</main>
@endsection