@foreach($tanks as $tank)
<div class="modal fade" id="edit{{ $tank->id }}" tabindex="-1" method="dialog" aria-labelledby="edit{{ $tank->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $tank->id }}Label">Edit {{ strtoupper('tank') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('tanks.update', $tank->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'ID',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $tank->id,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Meteran',
                    'name' => 'meters',
                    'type' => 'number',
                    'value' => $tank->meters,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Tangki1',
                    'name' => 'volume_t1',
                    'type' => 'number',
                    'value' => $tank->volume_t1,
                    'modifier' => '',
                ])

                @include('components.input',[
                    'label' => 'Tangki2',
                    'name' => 'volume_t2',
                    'type' => 'number',
                    'value' => $tank->volume_t2,
                    'modifier' => '',
                ])

                @include('components.input',[
                    'label' => 'Tangki3',
                    'name' => 'volume_t3',
                    'type' => 'number',
                    'value' => $tank->volume_t3,
                    'modifier' => '',
                ])

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save 
                    @include('components.icon', ['icon' => 'edit'])
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach