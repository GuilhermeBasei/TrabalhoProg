@extends('layouts.applogin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Item - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->


  <!-- Page Content -->
  <div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Gutins</h1>
            <div class="list-group">
                <a href="{{route('Item.index')}}" class="list-group-item">Itens em Destaque</a>
                <a href="{{route('Item.show',50)}}" class="list-group-item">Masculino</a>
                <a href="{{route('Item.show',51)}}" class="list-group-item">Feminino</a>

            </div>

        </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
          @foreach($itens as $item)
        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">{{$item->nome}}</h3>
            <h4>{{$item->preco}}</h4>
            <p class="card-text">{{$item->descricao}}</p>
              <button type="button" class="btn btn-success">Comprar</button>

          </div>
            @endforeach
        </div>
        <!-- /.card -->


        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection
