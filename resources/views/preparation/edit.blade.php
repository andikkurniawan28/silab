@foreach($preparations as $preparation)
<div class="modal fade" id="edit{{ $preparation->id }}" tabindex="-1" method="dialog" aria-labelledby="edit{{ $preparation->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $preparation->id }}Label">Edit {{ strtoupper('pi') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('preparations.update', $preparation->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $preparation->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'PI',
                    'name' => 'pi',
                    'type' => 'number',
                    'value' => $preparation->pi,
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