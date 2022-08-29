@foreach($coloromats as $coloromat)
<div class="modal fade" id="delete{{ $coloromat->id }}" tabindex="-1" coloromat="dialog" aria-labelledby="delete{{ $coloromat->id }}Label" aria-hidden="true">
    <div class="modal-dialog" coloromat="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $coloromat->id }}Label">Hapus {{ ucfirst('coloromat') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('coloromats.destroy', $coloromat->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $coloromat->sampling_id,
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