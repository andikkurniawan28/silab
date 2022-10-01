@foreach($samplings as $sampling)
<div class="modal fade" id="edit{{ $sampling->id }}" tabindex="-1" sampling="dialog" aria-labelledby="edit{{ $sampling->id }}Label" aria-hidden="true">
    <div class="modal-dialog" sampling="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $sampling->id }}Label">Edit {{ ucfirst('sampling') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('samplings.update', $sampling->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Sampel ID',
                    'name' => 'sample_id',
                    'type' => 'text',
                    'value' => $sampling->sample_id,
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