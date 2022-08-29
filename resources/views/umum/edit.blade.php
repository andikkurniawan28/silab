@foreach($umums as $umum)
<div class="modal fade" id="edit{{ $umum->id }}" tabindex="-1" umum="dialog" aria-labelledby="edit{{ $umum->id }}Label" aria-hidden="true">
    <div class="modal-dialog" umum="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $umum->id }}Label">Edit {{ ucfirst('Umum') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('umums.update', $umum->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $umum->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $umum->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'CaO',
                    'name' => 'cao',
                    'type' => 'number',
                    'value' => $umum->cao,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'pH',
                    'name' => 'pH',
                    'type' => 'number',
                    'value' => $umum->pH,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Turbidity',
                    'name' => 'turbidity',
                    'type' => 'number',
                    'value' => $umum->turbidity,
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