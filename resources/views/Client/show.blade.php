@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card-header">
            <h1>Libreria</h1>
        </div>
        <div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                    <td>{{$client->name}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{Route('client.index')}}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection
