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
                <th scope="col">Genero</th>
                <th scope="col">Puntuacion</th>
                <th scope="col">Ventas</th>
                <th scope="col">Edicion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                    <td>{{$book->name}} - {{$book->currentUser()->name ?? 'Libreria'}}</td>
                    <td>{{$book->gender}}</td>
                    <td>{{$book->rating}}</td>
                    <td>{{$book->sales}}</td>
                    <td>{{$book->released_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{Route('book.index')}}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection
