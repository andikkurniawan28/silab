@foreach($saccharomats as $saccharomat)
<div class="modal fade" id="edit{{ $saccharomat->id }}" tabindex="-1" saccharomat="dialog" aria-labelledby="edit{{ $saccharomat->id }}Label" aria-hidden="true">
    <div class="modal-dialog" saccharomat="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $saccharomat->id }}Label">Edit {{ ucfirst('saccharomat') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('saccharomats.update', $saccharomat->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $saccharomat->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $saccharomat->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Z',
                    'name' => 'pol',
                    'type' => 'number',
                    'value' => $saccharomat->pol,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => '%Brix',
                    'name' => 'percent_brix',
                    'type' => 'number',
                    'value' => $saccharomat->percent_brix,
                    'modifier' => '',
                ])

                @include('components.input',[
                    'label' => '%Pol',
                    'name' => 'percent_pol',
                    'type' => 'number',
                    'value' => $saccharomat->percent_pol,
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