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
            <h5 class="m-0 font-weight-bold text-primary">{{ strtoupper('hplc') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Barcode</th>
                            <th>Sampel</th>
                            <th>Fructose</th>
                            <th>Glucose</th>
                            <th>Succrose</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hplcs as $hplc)
                        <tr>
                            <td>{{ $hplc->id }}</td>
                            <td>{{ $hplc->sampling_id }}</td>
                            <td>{{ $hplc->sample_name }}</td>
                            <td>{{ $hplc->fructose }}</td>
                            <td>{{ $hplc->glucose }}</td>
                            <td>{{ $hplc->succrose }}</td>
                            <td>{{ $hplc->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $hplc->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $hplc->id }}">
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
                Tambah {{ strtoupper('hplc') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('hplc.create')
@include('hplc.edit')
@include('hplc.delete')
@endsection
