@csrf

<div class="mb-3">
    <label for="name" class="form-label">Articulo</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $post->name) }}">
</div>

<div class="mb-3">
    <label for="description" class="form-label">Contenido</label>
    <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $post->description) }}</textarea>
</div>

<div class="text-center">
    <button class="btn btn-success" type="submit">Publicar</button>
    <a href="{{ url('/') }}" class="btn btn-danger" type="button">Cancelar</a>
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
