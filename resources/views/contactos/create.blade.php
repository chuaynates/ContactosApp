<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body style="background-image: url('https://image.flaticon.com/icons/png/512/283/283516.png')">
    <div class="container my-1 col-md-4" >
    <div class="card" style="margin-top:50px">
		
    <br>
    <form action="{{url('/contactos')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
      <div class="form-group col-md-6" style="margin-left:100px">
        <label for="Nombre" style="margin-left:60px">{{'Nombre'}}</label>
        <input type="text" class="form-control" name="Nombre" id="Nombre" value="" required>
        </div>
        <br>
         <div class="form-group col-md-6" style="margin-left:100px">
        <label for="Apellido" style="margin-left:70px">{{'Apellido'}}</label>
        <input type="text"  class="form-control" name="Apellido" id="Apellido" value="" required>
        </div>
        <br>
         <div class="form-group col-md-6" style="margin-left:100px">
        <label for="Correo" style="margin-left:80px">{{'Correo'}}</label>
        <input type="email" class="form-control" name="Correo" id="Correo" value="" required>
        </div>
        <br>
         <div class="form-group col-md-6" style="margin-left:100px">
        <label for="Fecha" style="margin-left:80px">{{'Fecha'}}</label>
        <input type="date"  class="form-control" name="Fecha" id="Fecha" value="" required>
        </div>
        <br>
         <div class="form-group col-md-6" style="margin-left:100px">
        <label for="Foto" style="margin-left:80px">{{'Foto'}}</label>
        <input type="file"  class="form-control" name="Foto" id="Foto" value="" required>
        </div>
        <br>
        <div class="card-footer">
        <a class="btn btn-secondary"  role="button" href="{{url('contactos')}}"><</a>
        <input type="submit"  class="btn btn-info" value="Agregar" style="margin-left:130px">
        
        </div>
    </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>