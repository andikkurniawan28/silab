@foreach($boilers as $boiler)
<div class="modal fade" id="delete{{ $boiler->id }}" tabindex="-1" boiler="dialog" aria-labelledby="delete{{ $boiler->id }}Label" aria-hidden="true">
    <div class="modal-dialog" boiler="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $boiler->id }}Label">Hapus {{ ucfirst('ketel') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('boilers.destroy', $boiler->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Sampel',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $boiler->sample_name,
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