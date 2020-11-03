@extends('layouts.app')

@section('content')
    <h1>{{ $blog->title }}</h1>
    
    <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <a href="{{ route('blog.edit', $blog->id) }}">Editar</a>
        <button class="btn btn-danger">Eliminar </button>
    </form>
@endsection