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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('bahan Kimia') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kapur</th>
                            <th>Belerang</th>
                            <th>Floc</th>
                            <th>NaOH</th>
                            <th>B894</th>
                            <th>B895</th>
                            <th>B210</th>
                            <th>H<sub>3</sub>PO<sub>4</sub></th>
                            <th>Blotong</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chemicals as $chemical)
                        <tr>
                            <td>{{ $chemical->id }}</td>
                            <td>{{ $chemical->kapur }}</td>
                            <td>{{ $chemical->belerang }}</td>
                            <td>{{ $chemical->floc }}</td>
                            <td>{{ $chemical->naoh }}</td>
                            <td>{{ $chemical->b894 }}</td>
                            <td>{{ $chemical->b895 }}</td>
                            <td>{{ $chemical->b210 }}</td>
                            <td>{{ $chemical->asam_phospat }}</td>
                            <td>{{ $chemical->blotong }}</td>
                            <td>{{ $chemical->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $chemical->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $chemical->id }}">
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
                Tambah {{ ucfirst('bahan Kimia') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('chemical.create')
@include('chemical.edit')
@include('chemical.delete')
@endsection
