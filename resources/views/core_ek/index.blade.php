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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('Core Engkel Kecil') }}</h5>
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
                        @foreach ($core_eks as $core_ek)
                        <tr>
                            <td>{{ $core_ek->id }}</td>
                            <td>{{ $core_ek->barcode_antrian }}</td>
                            <td>{{ $core_ek->rfid_ember }}</td>
                            <td>{{ $core_ek->register }}</td>
                            <td>{{ $core_ek->brix_nira }}</td>
                            <td>{{ $core_ek->pol_nira }}</td>
                            <td>{{ $core_ek->rendemen }}</td>
                            <td>{{ $core_ek->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $core_ek->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $core_ek->id }}">
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
                Tambah {{ ucfirst('core_ek') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('core_ek.create')
@include('core_ek.edit')
@include('core_ek.delete')
@endsection
