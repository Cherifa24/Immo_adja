@extends('layouts.base')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Exemple de disposition de cartes Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .card {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-4 col-sm-6">
        @forelse($biens as $bien)
        <div class="card">
          <img src="{{$bien->galerie}}" class="card-img-top" alt="Nom de l'image">
          <div class="card-body">
                <h5 class="card-title">{{$bien->type_offre}}</h5>
                <p class="card-text">{{$bien->description}}</p>
            </div>
        </div>
        @empty
            <p>galerie vide</p>
        @endforelse
      </div>

      <!-- Répéter les divs de carte pour chaque élément supplémentaire -->
    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

@stop