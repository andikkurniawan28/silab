@foreach($factors as $factor)
<div class="modal fade" id="edit{{ $factor->id }}" tabindex="-1" factor="dialog" aria-labelledby="edit{{ $factor->id }}Label" aria-hidden="true">
    <div class="modal-dialog" factor="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $factor->id }}Label">Edit {{ ucfirst('factor') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('factors.update', $factor->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Deskripsi',
                    'name' => 'description',
                    'type' => 'text',
                    'value' => $factor->description,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Operasi',
                    'name' => 'operation',
                    'type' => 'text',
                    'value' => $factor->operation,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Value',
                    'name' => 'value',
                    'type' => 'number',
                    'value' => $factor->value,
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