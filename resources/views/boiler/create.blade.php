<div class="modal fade" id="create" tabindex="-1" boiler="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" boiler="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Tambah {{ ucfirst('ketel') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('boilers.store') }}" class="text-dark">
                @csrf
                @method('POST')

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'TDS',
                    'name' => 'tds',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'pH',
                    'name' => 'pH',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input',[
                    'label' => 'Sadah',
                    'name' => 'hardness',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input',[
                    'label' => 'Phospat',
                    'name' => 'phospate',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
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