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
               
                    <tr>
                    <td>{{$client->name}} - {{$client->currentRoom()->name ?? 'No tiene habitacion asignada'}}</a>
                    </td>
                    <td> 
                        <form action="{{Route('client.selectRoom', $client->id)}}" method="POST">
                            @csrf
                            @method('get')
                            
                            <select class="roomname" name="id">
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
                    </tr>
           
            </tbody>
        </table>
    </div>
    <div>
</div>
@endsection
