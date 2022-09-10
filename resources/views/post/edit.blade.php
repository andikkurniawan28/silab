@foreach($posts as $post)
<div class="modal fade" id="edit{{ $post->id }}" tabindex="-1" post="dialog" aria-labelledby="edit{{ $post->id }}Label" aria-hidden="true">
    <div class="modal-dialog" post="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $post->id }}Label">Edit {{ ucfirst('post') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('posts.update', $post->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'ID',
                    'name' => 'id',
                    'type' => 'text',
                    'value' => $post->id,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Code',
                    'name' => 'code',
                    'type' => 'text',
                    'value' => $post->code,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Region',
                    'name' => 'region',
                    'type' => 'text',
                    'value' => $post->region,
                    'modifier' => 'required',
                ])

            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> --}}
                <button type="submit" class="btn btn-primary">Save 
                    @include('components.icon', ['icon' => 'edit'])
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach