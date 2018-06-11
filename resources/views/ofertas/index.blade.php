<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <h1>Busqueda de habitaciones</h1><br>
    <form class="form-inline" action="{{ action('OfertasController@index') }}" method="GET">
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail3" name="nombre_hotel" placeholder="Nombre hotel">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword3" name="habitaciones" placeholder="Habitaciones">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword3" name="cantidad_ocupantes" placeholder="Cantidad de ocupantes">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword3" name="dormitorios" placeholder="Dormitorios">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword3" name="banos" placeholder="Baños">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
    </form>
    <hr>
    @foreach($ofertas as $oferta)
        <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $oferta->nombre_hotel }}</h3>
        </div>
        <div class="panel-body">
            {{ $oferta->descripcion }}<br>
            <span class="label label-primary">{{ $oferta->habitaciones }} habitaciones</span> 
            <span class="label label-primary">{{ $oferta->dormitorios }} dormitorios</span>
            <span class="label label-primary">{{ $oferta->banos }} baños</span>
            <span class="label label-primary">{{ $oferta->cantidad_ocupantes }} ocupantes</span>
        </div>
        </div>
    @endforeach
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>