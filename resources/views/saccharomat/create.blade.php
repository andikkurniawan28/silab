<div class="modal fade" id="create" tabindex="-1" saccharomat="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" saccharomat="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Tambah {{ ucfirst('saccharomat') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('saccharomats.store') }}" class="text-dark">
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
                    'label' => 'Z',
                    'name' => 'pol',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => '%Brix',
                    'name' => 'percent_brix',
                    'type' => 'number',
                    'value' => '',
                    'modifier' => '',
                ])

                @include('components.input',[
                    'label' => '%Pol',
                    'name' => 'percent_pol',
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