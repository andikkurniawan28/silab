<div class="modal fade" id="create" tabindex="-1" factor="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" factor="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Tambah {{ ucfirst('factor') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('factors.store') }}" class="text-dark">
                @csrf
                @method('POST')

                @include('components.input',[
                    'label' => 'Deskripsi',
                    'name' => 'description',
                    'type' => 'text',
                    'value' => '',
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Operasi',
                    'name' => 'operation',
                    'type' => 'text',
                    'value' => '',
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Value',
                    'name' => 'value',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => 'required',
                ])

            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> --}}
                <button type="submit" class="btn btn-primary">Save 
                    @include('components.icon', ['icon' => 'save'])
                </button>
                </form>
            </div>
        </div>
    </div>
</div>