@foreach($npps as $npp)
<div class="modal fade" id="edit{{ $npp->id }}" tabindex="-1" npp="dialog" aria-labelledby="edit{{ $npp->id }}Label" aria-hidden="true">
    <div class="modal-dialog" npp="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $npp->id }}Label">Edit {{ strtoupper('npp') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('npps.update', $npp->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Pol Baca',
                    'name' => 'pol',
                    'type' => 'number',
                    'value' => $npp->pol,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Brix',
                    'name' => 'percent_brix',
                    'type' => 'number',
                    'value' => $npp->percent_brix,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Pol',
                    'name' => 'percent_pol',
                    'type' => 'number',
                    'value' => $npp->percent_pol,
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