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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('taksasi Tetes') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Meteran</th>
                            <th>Tangki1</th>
                            <th>Tangki2</th>
                            <th>Tangki3</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tanks as $tank)
                        <tr>
                            <td>{{ $tank->id }}</td>
                            <td>{{ $tank->meters }}</td>
                            <td>{{ $tank->volume_t1 }}</td>
                            <td>{{ $tank->volume_t2 }}</td>
                            <td>{{ $tank->volume_t3 }}</td>
                            <td>{{ $tank->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $tank->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $tank->id }}">
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
                Tambah {{ ucfirst('taksasi Tetes') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('tank.create')
@include('tank.edit')
@include('tank.delete')
@endsection
