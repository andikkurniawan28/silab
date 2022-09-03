@foreach($arounds as $around)
<div class="modal fade" id="edit{{ $around->id }}" tabindex="-1" around="dialog" aria-labelledby="edit{{ $around->id }}Label" aria-hidden="true">
    <div class="modal-dialog" around="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $around->id }}Label">Edit {{ ucfirst('around') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('arounds.update', $around->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Kapur',
                    'name' => 'kapur',
                    'type' => 'number',
                    'value' => $around->id,
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