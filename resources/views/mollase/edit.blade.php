@foreach($mollases as $mollase)
<div class="modal fade" id="edit{{ $mollase->id }}" tabindex="-1" mollase="dialog" aria-labelledby="edit{{ $mollase->id }}Label" aria-hidden="true">
    <div class="modal-dialog" mollase="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $mollase->id }}Label">Edit {{ ucfirst('mollase') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('mollases.update', $mollase->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Tarra',
                    'name' => 'tarra',
                    'type' => 'number',
                    'value' => $mollase->tarra,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Bruto',
                    'name' => 'bruto',
                    'type' => 'number',
                    'value' => $mollase->bruto,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Netto',
                    'name' => 'netto',
                    'type' => 'number',
                    'value' => $mollase->netto,
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