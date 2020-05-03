@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">Nuevo</div>
        <div class="card-body">
            <form action="{{Route('book.update', $book->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="form-group">
                        <label>Nombre del libro</label>
                        <input type="text" name="name" class="form-control" value="{{$book->name}}">
                    </div>
                    <div class="form-group">
                        <label>Genero</label>
                        <input type="text" name="gender" class="form-control" value="{{$book->gender}}">
                    </div>
                    <div class="form-group">
                        <label>Puntuacion</label>
                        <input type="text" name="rating" class="form-control" value="{{$book->rating}}">
                    </div>
                    <div class="form-group">
                        <label>Ventas</label>
                        <input type="text" name="sales" class="form-control" value="{{$book->sales}}">
                    </div>
                    <div class="form-group">
                        <label>Año de Estreno</label>
                        <input type="text" name="released_at" class="form-control" value="{{$book->released_at}}">
                    </div>
                </div>
            
            </div>
                <div class="card-footer">
                <input type="submit" value="Actualizar" class = "btn btn-primary">
            </div>
        </form>
</div>
@endsection