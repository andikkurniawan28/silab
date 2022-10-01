@foreach($balances as $balance)
<div class="modal fade" id="edit{{ $balance->id }}" tabindex="-1" method="dialog" aria-labelledby="edit{{ $balance->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $balance->id }}Label">Edit {{ ucfirst('Nira Mentah') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('balances.update', $balance->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Kuintal Tebu',
                    'name' => 'sugar_cane',
                    'type' => 'number',
                    'value' => $balance->sugar_cane,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Totalizer',
                    'name' => 'totalizer_raw_juice',
                    'type' => 'number',
                    'value' => $balance->totalizer_raw_juice,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Flow',
                    'name' => 'flow_raw_juice',
                    'type' => 'number',
                    'value' => $balance->flow_raw_juice,
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