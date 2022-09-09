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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('Core Engkel Besar & Gandeng') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Antrian</th>
                            <th>RFID</th>
                            <th>Register</th>
                            <th>Brix</th>
                            <th>Pol</th>
                            <th>Rendemen</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($core_ebs as $core_eb)
                        <tr>
                            <td>{{ $core_eb->id }}</td>
                            <td>{{ $core_eb->barcode_antrian }}</td>
                            <td>{{ $core_eb->rfid_ember }}</td>
                            <td>{{ $core_eb->register }}</td>
                            <td>{{ $core_eb->brix_nira }}</td>
                            <td>{{ $core_eb->pol_nira }}</td>
                            <td>{{ $core_eb->rendemen }}</td>
                            <td>{{ $core_eb->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $core_eb->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $core_eb->id }}">
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
                Tambah {{ ucfirst('core_eb') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('core_eb.create')
@include('core_eb.edit')
@include('core_eb.delete')
@endsection
