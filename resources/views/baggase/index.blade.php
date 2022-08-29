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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('ampas') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Barcode</th>
                            <th>Sampel</th>
                            <th>Pol</th>
                            <th>%ZK</th>
                            <th>%Air</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($baggases as $baggase)
                        <tr>
                            <td>{{ $baggase->id }}</td>
                            <td>{{ $baggase->sampling_id }}</td>
                            <td>{{ $baggase->sample_name }}</td>
                            <td>{{ $baggase->corrected_pol }}</td>
                            <td>{{ $baggase->dry }}</td>
                            <td>{{ $baggase->water }}</td>
                            <td>{{ $baggase->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $baggase->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $baggase->id }}">
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
                Tambah {{ ucfirst('ampas') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('baggase.create')
@include('baggase.edit')
@include('baggase.delete')
@endsection
