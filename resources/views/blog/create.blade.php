@extends('layouts.app')


@section('content')
<div class="container">

<h2>Crear Articulo</h2>
<form action="{{ route('blog.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="title" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Titulo</label>
        <div class="col-lg-3">
            <input type="text" name="title" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="thumbnail" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Imagen presentacion</label>
        <div class="col-lg-3">
            <input type="text" name="thumbnail" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="description" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Descripcion</label>
        <div class="col-lg-3">
            <input type="text" name="description" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="img_index" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Imagen principal</label>
        <div class="col-lg-3">
            <input type="text" name="img_index" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="author" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Autor</label>
        <div class="col-lg-3">
            <input type="text" name="author" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="minutes_read" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Tiempo de lectura</label>
        <div class="col-lg-3">
            <input type="text" name="minutes_read" class="form-control" required>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>

</div>
@endsection
