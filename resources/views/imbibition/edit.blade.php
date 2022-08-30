@foreach($imbibitions as $imbibition)
<div class="modal fade" id="edit{{ $imbibition->id }}" tabindex="-1" method="dialog" aria-labelledby="edit{{ $imbibition->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $imbibition->id }}Label">Edit {{ ucfirst('Imbibisi') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('imbibitions.update', $imbibition->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Totalizer',
                    'name' => 'totalizer',
                    'type' => 'number',
                    'value' => $imbibition->totalizer,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Flow',
                    'name' => 'flow',
                    'type' => 'number',
                    'value' => $imbibition->flow,
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