@extends('layouts.app')

@section('content')
<div class="container">
<h1 style="text-align:center;"><img src="https://cdn.ticbeat.com/src/uploads/2017/04/red-de-contactos-networking-smartphone.jpg" width=435px></h1>


@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
 {{
    Session::get('Mensaje')
}}
</div>
@endif
<br/>
<br/>
 

<a class="btn btn-primary" href="{{url('contactos/create')}}" style="margin-left:500px; margin-top:-20px">Agregar</a>
<br><br>
<table class="table table-light table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>PERFIL</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CORREO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>ACCIONES</th>
        <tr>
    </thead>
    <tbody>
    @foreach($contactos as $contacto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img src="{{ asset('storage').'/'.$contacto->Foto}}"  class="rounded float-left img-thumbnail" alt="" width="100">
            </td>
            <td>{{$contacto->Nombre}}</td>
            <td>{{$contacto->Apellido}}</td>
            <td>{{$contacto->Correo}}</td>
            <td>{{$contacto->Fecha}}</td>
            <td>
            <a  class="btn btn-warning" href="{{url('/contactos/'.$contacto->id.'/edit')}}">Editar</a>

            <form method="post" action="{{url('/contactos/'.$contacto->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit"class="btn btn-danger" onclick="return confirm('¿Borrar?');">Eliminar</button>
            </form>
            </td>
        </tr>
    @endforeach
        </tbody>
</table>
</div>
@endsection
