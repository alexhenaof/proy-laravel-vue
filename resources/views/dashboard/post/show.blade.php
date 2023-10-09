@extends('dashboard.master')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <div class="form-group">
        <label for="title">Título</label>
        <input readonly type="text" class="form-control" id="title" value="{{ $post->name }}">
    </div>
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input readonly type="text" class="form-control" id="url_clean" value="{{ $post->url_clean }}">
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea readonly id="content" cols="30" rows="3" class="form-control">{{ $post->description }}</textarea>
    </div>
@endsection
