@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">Nuevo</div>
        <div class="card-body">
            <form action="{{Route('client.update', $client->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" value="{{$client->name}}">
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="phone" class="form-control" value="{{$client->phone}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="{{$client->email}}">
                    </div>
               </div>
            </div>
                <div class="card-footer">
                <input type="submit" value="Actualizar" class = "btn btn-primary">
            </div>
        </form>
</div>
@endsection