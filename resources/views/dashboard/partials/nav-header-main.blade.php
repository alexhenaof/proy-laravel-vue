<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
    <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item m-4">
                <a class="dropdown-item" href="{{ route('post.index') }}">Publicaciones</a>
            </li>
            <li class="nav-item m-4">
                <a class="dropdown-item" href="{{ route('category.index') }}">Categorías</a>
            </li>
        </ul>
        {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
    </div>
</nav>
<!-- Incluir jQuery (debes incluirlo antes de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Incluir Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.min.js"></script>
