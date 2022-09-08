@foreach($rs_ins as $rs_in)
<div class="modal fade" id="edit{{ $rs_in->id }}" tabindex="-1" rs_in="dialog" aria-labelledby="edit{{ $rs_in->id }}Label" aria-hidden="true">
    <div class="modal-dialog" rs_in="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $rs_in->id }}Label">Edit {{ ucfirst('rs_in') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('rs_ins.update', $rs_in->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Tarra',
                    'name' => 'tarra',
                    'type' => 'number',
                    'value' => $rs_in->tarra,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Bruto',
                    'name' => 'bruto',
                    'type' => 'number',
                    'value' => $rs_in->bruto,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Netto',
                    'name' => 'netto',
                    'type' => 'number',
                    'value' => $rs_in->netto,
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