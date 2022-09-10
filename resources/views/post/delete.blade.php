@foreach($posts as $post)
<div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" post="dialog" aria-labelledby="delete{{ $post->id }}Label" aria-hidden="true">
    <div class="modal-dialog" post="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $post->id }}Label">Hapus {{ ucfirst('post') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('posts.destroy', $post->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Code',
                    'name' => 'code',
                    'type' => 'text',
                    'value' => $post->code,
                    'modifier' => 'readonly',
                ])

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Ya 
                    @include('components.icon', ['icon' => 'trash'])
                </button>
            </form>
            </div>
        </div>
    </div>
</div>
@endforeach