@foreach($umums as $umum)
<div class="modal fade" id="delete{{ $umum->id }}" tabindex="-1" umum="dialog" aria-labelledby="delete{{ $umum->id }}Label" aria-hidden="true">
    <div class="modal-dialog" umum="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $umum->id }}Label">Hapus {{ ucfirst('Umum') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('umums.destroy', $umum->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Sampel',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $umum->sample_name,
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