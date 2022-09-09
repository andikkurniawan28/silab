@foreach($core_ebs as $core_eb)
<div class="modal fade" id="edit{{ $core_eb->id }}" tabindex="-1" core_eb="dialog" aria-labelledby="edit{{ $core_eb->id }}Label" aria-hidden="true">
    <div class="modal-dialog" core_eb="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $core_eb->id }}Label">Edit {{ ucfirst('core_eb') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('core_ebs.update', $core_eb->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'ID',
                    'name' => 'id',
                    'type' => 'text',
                    'value' => $core_eb->id,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'barcode_antrian',
                    'type' => 'text',
                    'value' => $core_eb->barcode_antrian,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'RFID',
                    'name' => 'rfid_ember',
                    'type' => 'text',
                    'value' => $core_eb->rfid_ember,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Register',
                    'name' => 'register',
                    'type' => 'text',
                    'value' => $core_eb->register,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Brix',
                    'name' => 'brix_nira',
                    'type' => 'number',
                    'value' => $core_eb->brix_nira,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Pol',
                    'name' => 'pol_nira',
                    'type' => 'number',
                    'value' => $core_eb->pol_nira,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Rendemen',
                    'name' => 'rendemen',
                    'type' => 'number',
                    'value' => $core_eb->rendemen,
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