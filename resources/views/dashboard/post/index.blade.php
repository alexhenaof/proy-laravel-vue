@extends('dashboard.master')
@section('content')
    <a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">
        Crear
    </a>

    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>titulo</td>
                <td>categoria</td>
                <td>posteado</td>
                <td>creacion</td>
                <td>actualizacion</td>
                <td>acciones</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->name }}
                    </td>
                    <td>
                        {{ $post->category_id }}
                        {{-- {{ $post->category }} --}}
                    </td>
                    <td>
                        {{ $post->description }}
                    </td>
                    <td>
                        {{ $post->created_at->format('d-m-Y') }}
                    </td>
                    <td>
                        {{ $post->updated_at->format('d-m-Y') }}
                    </td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Actualizar</a>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-id="{{ $post->id }}" class="btn btn-outline-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

    {{-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLlabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"><span
                            aria-hidden="trye">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>¿seguro que desea borrar el registro seleccionado?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btb-secondary" data-dismiss="modal">Cerrar</button>

                    <form id="formDelete" method="POST" action="{{ route('post.destroy', 0) }}"
                        data-action="{{ route('post.destroy', 0) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var action = $('#formDelete').attr('data-action').slice(0, -1)
                action += id
                $('#formDelete').attr('action', action)
                var modal = $(this) // Corrección aquí
                modal.find('.modal-title').text('Vas a borrar el POST: ' + id)
            });
        };
    </script> --}}




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
