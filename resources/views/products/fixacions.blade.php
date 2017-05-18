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
            @foreach($fixacions as $fixacio)
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="{{'imgs/products/'.$fixacio->imatge}}" alt="{{$fixacio->title}}">
                    <div class="caption">
                      <span class="title">{{$fixacio->title}}</span>
                      <p>Talla: {{$fixacio->talla}}</p>
                      <p>Marca: {{$fixacio->marca}}</p>
                      <p>Preu: {{$fixacio->preu}}€</p>
                      <button class="btn btn-primary" onclick="mostrarPreu({{$fixacio->preu}})">Afegir</button>
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
