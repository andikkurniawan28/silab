@foreach($hplcs as $hplc)
<div class="modal fade" id="edit{{ $hplc->id }}" tabindex="-1" method="dialog" aria-labelledby="edit{{ $hplc->id }}Label" aria-hidden="true">
    <div class="modal-dialog" method="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit{{ $hplc->id }}Label">Edit {{ strtoupper('hplc') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('hplcs.update', $hplc->id) }}" class="text-dark">
                @csrf
                @method('PUT')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'sample_name',
                    'type' => 'text',
                    'value' => $hplc->sample_name,
                    'modifier' => 'readonly',
                ])

                @include('components.input',[
                    'label' => 'Barcode',
                    'name' => 'sampling_id',
                    'type' => 'number',
                    'value' => $hplc->sampling_id,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Fructose',
                    'name' => 'fructose',
                    'type' => 'number',
                    'value' => $hplc->fructose,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Glucose',
                    'name' => 'glucose',
                    'type' => 'number',
                    'value' => $hplc->glucose,
                    'modifier' => 'required',
                ])

                @include('components.input',[
                    'label' => 'Succrose',
                    'name' => 'succrose',
                    'type' => 'number',
                    'value' => $hplc->succrose,
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