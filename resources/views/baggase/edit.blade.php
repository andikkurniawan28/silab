@foreach($baggases as $baggase)
<div class="modal fade" id="edit{{ $baggase->id }}" tabindex="-1" baggase="dialog" aria-labelledby="edit{{ $baggase->id }}Label" aria-hidden="true">
    <div class="modal-dialog" baggase="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $baggase->id }}Label">Edit {{ ucfirst('Ampas') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('baggases.update', $baggase->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sampling_name',
                    'type' => 'text',
                    'value' => $baggase->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $baggase->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Pol',
                    'name' => 'corrected_pol',
                    'type' => 'number',
                    'value' => $baggase->corrected_pol,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => '%ZK',
                    'name' => 'dry',
                    'type' => 'number',
                    'value' => $baggase->dry,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => '%Air',
                    'name' => 'water',
                    'type' => 'number',
                    'value' => $baggase->water,
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