@extends('layouts.app')


@section('content')
<div class="container">

<h2>Crear Articulo</h2>
<form action="{{ route('blog.update',$blog->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group row">
        <label for="title" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Titulo</label>
        <div class="col-lg-3">
            <input type="text" value="{{ $blog->title }}" name="title" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="thumbnail" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Imagen presentacion</label>
        <div class="col-lg-3">
            <input type="text" value="{{ $blog->thumbnail }}" name="thumbnail" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="description" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Descripcion</label>
        <div class="col-lg-3">
            <input type="text" value="{{ $blog->description }}"  name="description" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="img_index" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Imagen principal</label>
        <div class="col-lg-3">
            <input type="text" value="{{ $blog->img_index }}" name="img_index" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="author" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Autor</label>
        <div class="col-lg-3">
            <input type="text" value="{{ $blog->author }}" name="author" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="minutes_read" class="ul-form__label ul-form--margin col-lg-2 col-form-label">Tiempo de lectura</label>
        <div class="col-lg-3">
            <input type="text" value="{{ $blog->minutes_read }}" name="minutes_read" class="form-control" required>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>

</div>
@endsection
