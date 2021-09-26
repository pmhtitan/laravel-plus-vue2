@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header">¿En qué estás pensando ahora?</div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="text-thought">Ahora estoy pensando en:</label>
                            <input type="text" name="thought" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar pensamiento</button>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Publicado en FECHA - Actualizado a FECHA</div>

                <div class="card-body">
                    <label for="text-thought">asd</label>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection