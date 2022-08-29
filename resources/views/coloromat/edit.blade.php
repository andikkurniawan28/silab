@foreach($coloromats as $coloromat)
<div class="modal fade" id="edit{{ $coloromat->id }}" tabindex="-1" coloromat="dialog" aria-labelledby="edit{{ $coloromat->id }}Label" aria-hidden="true">
    <div class="modal-dialog" coloromat="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $coloromat->id }}Label">Edit {{ ucfirst('coloromat') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('coloromats.update', $coloromat->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $coloromat->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $coloromat->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Icumsa',
                    'name' => 'icumsa',
                    'type' => 'number',
                    'value' => $coloromat->icumsa,
                    'modifier' => 'required',
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