<table class="table-dark table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titulo</td>
            <td>Cibtebudi</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->tittle}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <button wire:click="edit({{$post->id}})" class="btn btn-primary">
                        Editar
                    </button>
                </td>
                <td>
                    <button wire:click="destroy({{$post->id}})" class="btn btn-primary">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>

    {{$posts->links()}}
