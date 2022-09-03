@foreach($chemicals as $chemical)
<div class="modal fade" id="edit{{ $chemical->id }}" tabindex="-1" chemical="dialog" aria-labelledby="edit{{ $chemical->id }}Label" aria-hidden="true">
    <div class="modal-dialog" chemical="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $chemical->id }}Label">Edit {{ ucfirst('bahan Kimia') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('chemicals.update', $chemical->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Kapur',
                    'name' => 'kapur',
                    'type' => 'number',
                    'value' => $chemical->kapur,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Belerang',
                    'name' => 'belerang',
                    'type' => 'number',
                    'value' => $chemical->belerang,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Floc',
                    'name' => 'floc',
                    'type' => 'number',
                    'value' => $chemical->floc,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'NaOH',
                    'name' => 'naoh',
                    'type' => 'number',
                    'value' => $chemical->naoh,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'B894',
                    'name' => 'b894',
                    'type' => 'number',
                    'value' => $chemical->b894,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'B895',
                    'name' => 'b895',
                    'type' => 'number',
                    'value' => $chemical->b895,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'B210',
                    'name' => 'b210',
                    'type' => 'number',
                    'value' => $chemical->b210,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'H3PO4',
                    'name' => 'asam_phospat',
                    'type' => 'number',
                    'value' => $chemical->asam_phospat,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Blotong',
                    'name' => 'blotong',
                    'type' => 'number',
                    'value' => $chemical->blotong,
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