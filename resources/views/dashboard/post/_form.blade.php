@csrf
{{-- <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
</div>
<div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input type="text" name="url_clean" id="url_clean" class="form-control"
        value="{{ old('url_clean', $post->url_clean) }}">
</div>
<div class="form-group">
    <label for="content">Contenido</label>
    <textarea name="content" id="content" class="form-control" rows="3">{{ old('content', $post->content) }}</textarea>
</div>

<input type="submit" value="Enviar" class="btn btn-primary"> --}}


<div class="mb-3">
    <label for="name" class="form-label">Articulo</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $post->name) }}">
</div>

<div class="mb-3">
    <label for="description" class="form-label">Contenido</label>
    <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $post->description) }}</textarea>
</div>

<div class="text-center">
    <button class="btn btn-success btn-sm" type="submit">Publicar</button>
    <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm" type="button">Cancelar</a>
</div>


{{-- <div class="form-group">
    <label for="category_id">Categorias</label>
    <select name="category_id" id="category_id" class="form-control">
        @foreach ($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">
                {{ $title }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="posted">Posted</label>
    <select name="posted" id="posted" class="form-control">
        @include('dashboard.partial.option-yes-not', ['val' => $post->posted])
    </select>
</div> --}}
