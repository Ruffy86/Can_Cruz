@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card-header">
            Libreria
            <a href="{{Route('book.create')}}" class="btn btn-primary">Añadir</a>
        </div>
        <div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">  </th>
                <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                    <td>
                        <div id="checkboxes">
                        <form action="store" method="post">
                            <input type="checkbox" name="favorite[]" id="east" value="favorite[]">
                        </form>
                        </div>
                    </td>
                    <td><a href="{{Route('book.show', $book->id)}}">{{$book->name}}</a></td>
                    <td><a href="{{Route('book.edit', $book->id)}}" class="btn btn-success">Modificar</a></td>
                    <td>
                    <form action="{{Route('book.destroy', $book->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Borrar" class = "btn btn-danger">
                    </form>
                    </td>
                    <td>
                    <td><a href="{{Route('book.selection', $book->id)}}" class="btn btn-primary">Seleccionar</a></td>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
    <div class="card-footer">
        <button type="submit" class="btn btn-secondary">Añadir al carro</button>
    </div>
</div>
@endsection
