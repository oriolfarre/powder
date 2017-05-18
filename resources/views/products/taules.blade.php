@extends('layouts.app')

@section('content')
<!-- Incloim el calculador -->
@include('products.calculador')
<!-- /End calculador -->

@include('products.tabs')
<div class="container">
  <div class="row">
    <div class="products">
      <div class="panel panel-default">
        <div class="panel-body">
            @foreach($taules as $taula)
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="{{'imgs/products/'.$taula->imatge}}" alt="{{$taula->title}}">
                    <div class="caption">
                      <span class="title">{{$taula->title}}</span>
                      <p>Mides: {{$taula->mides}}</p>
                      <p>Marca: {{$taula->marca}}</p>
                      <p>Preu: {{$taula->preu}}€</p>
                      <button class="btn btn-primary" onclick="mostrarPreu({{$taula->preu}})">Afegir</button>
                    </div>
                  </div>
                </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('javascript')
  <script type="application/javascript">
    /***************************************
      Calculador de pressupost
    ****************************************/

      function mostrarPreu(preu){
        // var afegir_button = $(this);
        var preu = preu;
        $.ajax({
            // var url2 = 'taules/add/'+preu;
            type: 'GET',
            url: 'taules/add/'+preu,
            success: function(data){
                console.log('success',data)
                // Return: 1 = favorito / 0 = no-favorito
                // if(data == 1) afegir_button.addClass('active');
                // else afegir_button.removeClass('active');
            },
            error: function(data){
                console.log('error', data);
                // location.reload();
            }
        });
        $(document).ajaxStop(function(){
            window.location.reload();
        });
      }


  </script>


@endsection
