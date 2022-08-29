@extends('layouts.app')

@section('sidebar')
@include('components.sidebar')
@endsection

@section('navbar')
@include('components.navbar')
@endsection

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
            <h5 class="m-0 font-weight-bold text-primary">{{ 'Coloromat' }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Barcode</th>
                            <th>Sampel</th>
                            <th>Icumsa</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coloromats as $coloromat)
                        <tr>
                            <td>{{ $coloromat->id }}</td>
                            <td>{{ $coloromat->sampling_id }}</td>
                            <td>{{ $coloromat->sample_name }}</td>
                            <td>{{ $coloromat->icumsa }}</td>
                            <td>{{ $coloromat->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $coloromat->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $coloromat->id }}">
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
                Tambah {{ ucfirst('coloromat') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('coloromat.create')
@include('coloromat.edit')
@include('coloromat.delete')
@endsection
