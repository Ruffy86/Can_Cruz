@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">Nuevo</div>
        <div class="card-body">
            <form action="{{Route('client.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mail</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
            
            </div>
                <div class="card-footer">
                <input type="submit" value="Crear" class = "btn btn-primary">
            </div>
        </form>
</div>
@endsection