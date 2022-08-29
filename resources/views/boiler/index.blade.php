@extends('layouts.app')

@section('content')
<div class="container-fluid">

    @if($message = Session::get('error'))
        @include('components.alert', ['message'=>$message, 'color'=>'danger'])
    @endif

    @if($message = Session::get('success'))
        @include('components.alert', ['message'=>$message, 'color'=>'danger'])
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('ketel') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Barcode</th>
                            <th>Sampel</th>
                            <th>TDS</th>
                            <th>pH</th>
                            <th>Sadah</th>
                            <th>Phospat</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($boilers as $boiler)
                        <tr>
                            <td>{{ $boiler->id }}</td>
                            <td>{{ $boiler->sampling_id }}</td>
                            <td>{{ $boiler->sample_name }}</td>
                            <td>{{ $boiler->tds }}</td>
                            <td>{{ $boiler->pH }}</td>
                            <td>{{ $boiler->hardness }}</td>
                            <td>{{ $boiler->phospate }}</td>
                            <td>{{ $boiler->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $boiler->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $boiler->id }}">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Tambah {{ ucfirst('ketel') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('boiler.create')
@include('boiler.edit')
@include('boiler.delete')
@endsection
