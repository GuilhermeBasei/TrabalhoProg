@extends('layouts.applogin')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sex Shop - Gutins</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->


<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Gutins</h1>
            <div class="list-group">
                <a href="{{url('/')}}" class="list-group-item">Destaques da Semana</a>
                <a href="{{route('Item.index')}}" class="list-group-item">Todos os Produtos</a>
                <a href="{{route('Item.show','Masculino')}}" class="list-group-item">Masculino</a>
                <a href="{{route('Item.show','Feminino')}}" class="list-group-item">Feminino</a>

            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <span class="h2">Destaques da semana</span>


            <div class="row">
                @foreach($itens as $item)
                    <div class="col-lg-4 col-md-6 mb-4 mt-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{$item->link}}" height="400" width="700" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('Item.show',$item->id)}}">{{$item->nome}}</a>
                                </h4>
                                <h5>R$ {{$item->preco}}</h5>
                                <p class="card-text">{{$item->descricao}}</p>
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>

            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection
