@foreach($factors as $factor)
<div class="modal fade" id="delete{{ $factor->id }}" tabindex="-1" factor="dialog" aria-labelledby="delete{{ $factor->id }}Label" aria-hidden="true">
    <div class="modal-dialog" factor="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $factor->id }}Label">Hapus {{ ucfirst('factor') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('factors.destroy', $factor->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'name',
                    'type' => 'text',
                    'value' => $factor->name,
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