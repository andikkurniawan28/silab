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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('saccharomat') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Barcode</th>
                            <th>Sampel</th>
                            <th>% Brix</th>
                            <th>Polbaca</th>
                            <th>% Pol</th>
                            <th>% HK</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($saccharomats as $saccharomat)
                        <tr>
                            <td>{{ $saccharomat->id }}</td>
                            <td>{{ $saccharomat->sampling_id }}</td>
                            <td>{{ $saccharomat->sample_name }}</td>
                            <td>{{ $saccharomat->percent_brix }}</td>
                            <td>{{ $saccharomat->pol }}</td>
                            <td>{{ $saccharomat->percent_pol }}</td>
                            <td>{{ $saccharomat->purity }}</td>
                            <td>{{ $saccharomat->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $saccharomat->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $saccharomat->id }}">
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
                Tambah {{ ucfirst('saccharomat') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('saccharomat.create')
@include('saccharomat.edit')
@include('saccharomat.delete')
@endsection
