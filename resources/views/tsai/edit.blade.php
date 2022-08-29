@foreach($tsais as $tsai)
<div class="modal fade" id="edit{{ $tsai->id }}" tabindex="-1" method="dialog" aria-labelledby="edit{{ $tsai->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $tsai->id }}Label">Edit {{ strtoupper('tsai') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('tsais.update', $tsai->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $tsai->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $tsai->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'TSAI',
                    'name' => 'tsai',
                    'type' => 'number',
                    'value' => $tsai->tsai,
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