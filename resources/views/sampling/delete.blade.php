@foreach($samplings as $sampling)
<div class="modal fade" id="delete{{ $sampling->id }}" tabindex="-1" sampling="dialog" aria-labelledby="delete{{ $sampling->id }}Label" aria-hidden="true">
    <div class="modal-dialog" sampling="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $sampling->id }}Label">Hapus {{ ucfirst('sampling') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('samplings.destroy', $sampling->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Sampel ID',
                    'name' => 'sample_id',
                    'type' => 'text',
                    'value' => $sampling->sample_id,
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