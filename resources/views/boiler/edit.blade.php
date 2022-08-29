@foreach($boilers as $boiler)
<div class="modal fade" id="edit{{ $boiler->id }}" tabindex="-1" boiler="dialog" aria-labelledby="edit{{ $boiler->id }}Label" aria-hidden="true">
    <div class="modal-dialog" boiler="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $boiler->id }}Label">Edit {{ ucfirst('ketel') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('boilers.update', $boiler->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $boiler->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $boiler->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'TDS',
                    'name' => 'tds',
                    'type' => 'number',
                    'value' => $boiler->tds,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'pH',
                    'name' => 'pH',
                    'type' => 'number',
                    'value' => $boiler->pH,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Sadah',
                    'name' => 'hardness',
                    'type' => 'number',
                    'value' => $boiler->hardness,
                    'modifier' => '',
                ])

                @include('components.input',[
                    'label' => 'Phospat',
                    'name' => 'phospate',
                    'type' => 'number',
                    'value' => $boiler->phospate,
                    'modifier' => '',
                ])

            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> --}}
                <button type="submit" class="btn btn-primary">Save 
                    @include('components.icon', ['icon' => 'edit'])
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach