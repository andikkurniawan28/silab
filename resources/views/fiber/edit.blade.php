@foreach($fibers as $fiber)
<div class="modal fade" id="edit{{ $fiber->id }}" tabindex="-1" method="dialog" aria-labelledby="edit{{ $fiber->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $fiber->id }}Label">Edit {{ ucfirst('sabut') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('fibers.update', $fiber->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $fiber->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $fiber->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Kadar Sabut',
                    'name' => 'fiber',
                    'type' => 'number',
                    'value' => $fiber->fiber,
                    'modifier' => 'required',
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