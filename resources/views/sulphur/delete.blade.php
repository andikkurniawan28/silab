@foreach($sulphurs as $sulphur)
<div class="modal fade" id="delete{{ $sulphur->id }}" tabindex="-1" method="dialog" aria-labelledby="delete{{ $sulphur->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $sulphur->id }}Label">Hapus {{ strtoupper('so2') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('sulphurs.destroy', $sulphur->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Sampel',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $sulphur->sample_name,
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