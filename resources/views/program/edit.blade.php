@foreach($programs as $program)
<div class="modal fade" id="edit{{ $program->id }}" tabindex="-1" program="dialog" aria-labelledby="edit{{ $program->id }}Label" aria-hidden="true">
    <div class="modal-dialog" program="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $program->id }}Label">Edit {{ ucfirst('program') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('programs.update', $program->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'ID',
                    'name' => 'id',
                    'type' => 'text',
                    'value' => $program->id,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Code',
                    'name' => 'code',
                    'type' => 'text',
                    'value' => $program->code,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Name',
                    'name' => 'name',
                    'type' => 'text',
                    'value' => $program->name,
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