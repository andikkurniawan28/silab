@foreach($npps as $npp)
<div class="modal fade" id="delete{{ $npp->id }}" tabindex="-1" npp="dialog" aria-labelledby="delete{{ $npp->id }}Label" aria-hidden="true">
    <div class="modal-dialog" npp="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $npp->id }}Label">Hapus {{ strtoupper('npp') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('npps.destroy', $npp->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'ID',
                    'name' => 'id',
                    'type' => 'text',
                    'value' => $npp->id,
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