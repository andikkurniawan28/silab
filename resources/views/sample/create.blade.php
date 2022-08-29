<div class="modal fade" id="create" tabindex="-1" sample="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" sample="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Tambah {{ ucfirst('sample') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('samples.store') }}" class="text-dark">
                @csrf
                @method('POST')

                @include('components.input',[
                    'label' => 'Nama',
                    'name' => 'name',
                    'type' => 'text',
                    'value' => '',
                    'modifier' => 'required',
                ])

                <div class="form-group row">
                    <label for="role_id" class="col-sm-2 col-form-label">Station</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="station_id">
                            @foreach ($stations as $station)
                                <option value="{{ $station->id }}">
                                    {{ $station->name }}
                                </option>
                            @endforeach
                          </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="method_id" class="col-sm-2 col-form-label">Method</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="method_id">
                            @foreach ($methods as $method)
                                <option value="{{ $method->id }}">
                                    {{ $method->id }} | {{ $method->description }}
                                </option>
                            @endforeach
                          </select>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> --}}
                <button type="submit" class="btn btn-primary">Save 
                    @include('components.icon', ['icon' => 'save'])
                </button>
                </form>
            </div>
        </div>
    </div>
</div>