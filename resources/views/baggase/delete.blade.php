@foreach($baggases as $baggase)
<div class="modal fade" id="delete{{ $baggase->id }}" tabindex="-1" baggase="dialog" aria-labelledby="delete{{ $baggase->id }}Label" aria-hidden="true">
    <div class="modal-dialog" baggase="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $baggase->id }}Label">Hapus {{ ucfirst('ampas') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('baggases.destroy', $baggase->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Sampel',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $baggase->sample_name,
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