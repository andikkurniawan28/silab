@foreach($calciums as $calcium)
<div class="modal fade" id="edit{{ $calcium->id }}" tabindex="-1" method="dialog" aria-labelledby="edit{{ $calcium->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $calcium->id }}Label">Edit {{ ucfirst('kapur') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('calciums.update', $calcium->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $calcium->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $calcium->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Kadar Kapur',
                    'name' => 'calcium',
                    'type' => 'number',
                    'value' => $calcium->calcium,
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