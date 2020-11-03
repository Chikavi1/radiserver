@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Blogs</h2>
    <a href="{{ route('blog.create') }}">Crear Articulo</a>
    @foreach($blogs as $blog)
    <h3>{{ $blog->title }}</h3>
    <a href="{{ route('blog.show',$blog->id) }}">Ver más</a>
    @endforeach
</div>

@endsection