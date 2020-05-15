@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card-header">
            <h1>Clientes</h1>
            <a href="{{Route('client.create')}}" class="btn btn-primary">Añadir</a>
        </div>
        <div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                    <td><a href="{{Route('client.show', $client->id)}}">{{$client->name}} - {{$client->currentRoom()->name ?? 'No tiene habitacion asignada'}}</a></td>
                    <td><a href="{{Route('client.edit', $client->id)}}" class="btn btn-success">Modificar</a></td>
                    <td>
                    <form action="{{Route('client.destroy', $client->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Borrar" class = "btn btn-danger">
                    </form>
                    </td>
                    <td> 
                        <form action="{{Route('client.selectRoom', $client->id)}}" method="POST">
                            @csrf
                            @method('get')
                            
                            <select class="roomname" name="id">
                                <option selected>Elige habitacion</option>
                                @foreach ($rooms as $room)
                                <option value="{{$room->id}}">{{$room->name}}</option>
                                @endforeach
                            </select> 

                            <div class = "form-group">
                            <label>Fecha de ingreso</label>
                            <input type="date" name= "Date_From" class = "form-control">
                            </div>
                            <div class = "form-group">
                            <label>Fecha de salida</label>
                            <input type="date" name= "Date_To" class = "form-control">
                            </div>
                            <input type="submit" value="Reservar habitación" class = "btn btn-primary">
                        </form>
                    </td>
                    <td><a href="{{Route('client.liberateRoom', $client->id)}}" class="btn btn-secondary">Liberar habitación</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
</div>
@endsection
