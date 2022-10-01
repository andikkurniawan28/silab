@foreach($core_eks as $core_ek)
<div class="modal fade" id="edit{{ $core_ek->id }}" tabindex="-1" core_ek="dialog" aria-labelledby="edit{{ $core_ek->id }}Label" aria-hidden="true">
    <div class="modal-dialog" core_ek="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $core_ek->id }}Label">Edit {{ ucfirst('core_ek') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('core_eks.update', $core_ek->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'ID',
                    'name' => 'id',
                    'type' => 'text',
                    'value' => $core_ek->id,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Antrian',
                    'name' => 'barcode_antrian',
                    'type' => 'text',
                    'value' => $core_ek->barcode_antrian,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'RFID',
                    'name' => 'rfid_ember',
                    'type' => 'text',
                    'value' => $core_ek->rfid_ember,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Register',
                    'name' => 'register',
                    'type' => 'text',
                    'value' => $core_ek->register,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Brix',
                    'name' => 'brix_nira',
                    'type' => 'number',
                    'value' => $core_ek->brix_nira,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Pol',
                    'name' => 'pol_nira',
                    'type' => 'number',
                    'value' => $core_ek->pol_nira,
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