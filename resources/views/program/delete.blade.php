@foreach($programs as $program)
<div class="modal fade" id="delete{{ $program->id }}" tabindex="-1" program="dialog" aria-labelledby="delete{{ $program->id }}Label" aria-hidden="true">
    <div class="modal-dialog" program="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete{{ $program->id }}Label">Hapus {{ ucfirst('program') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('programs.destroy', $program->id) }}" class="text-dark">
                @csrf
                @method('DELETE')
                <p>Apakah Anda yakin ?</p>

                @include('components.input',[
                    'label' => 'Code',
                    'name' => 'code',
                    'type' => 'text',
                    'value' => $program->code,
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