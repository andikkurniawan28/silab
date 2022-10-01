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
            <h5 class="m-0 font-weight-bold text-primary">{{ strtoupper('npp') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pol Baca</th>
                            <th>Brix</th>
                            <th>Pol</th>
                            <th>HK</th>
                            <th>Rendemen</th>
                            <th>Jam Analisa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($npps as $npp)
                        <tr>
                            <td>{{ $npp->id }}</td>
                            <td>{{ $npp->pol }}</td>
                            <td>{{ $npp->percent_brix }}</td>
                            <td>{{ $npp->percent_pol }}</td>
                            <td>{{ $npp->purity }}</td>
                            <td>{{ $npp->yield }}</td>
                            <td>{{ $npp->created_at }}</td>
                            <td>

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $npp->id }}">
                                    Edit
                                </button>

                                @if(session('role') == 1 or session('role') == 5)
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $npp->id }}">
                                    Hapus
                                </button>
                                @endif
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Tambah {{ strtoupper('npp') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('npp.create')
@include('npp.edit')
@include('npp.delete')
@endsection
