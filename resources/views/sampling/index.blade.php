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
            <h5 class="m-0 font-weight-bold text-primary">Barcode</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            {{-- <th>Sampel ID</th> --}}
                            <th>Nama Sampel</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($samplings as $sampling)
                        <tr>
                            <td>{{ $sampling->id }}</td>
                            {{-- <td>{{ $sampling->sample_id }}</td> --}}
                            <td>{{ $sampling->sample_name }}</td>
                            <td>{{ $sampling->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $sampling->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $sampling->id }}">
                                    Hapus
                                </button>
                                <a href="{{ route('print-barcode', $sampling->id) }}" type="button" class="btn btn-info">
                                    Cetak Ulang
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('samplings.index') }}" type="button" class="btn btn-primary">
                Cetak Barcode Sampel
            </a>
        </div>
    </div>
</div>
@endsection

@section('modal')
{{-- @include('sampling.create') --}}
@include('sampling.edit')
@include('sampling.delete')
@endsection
