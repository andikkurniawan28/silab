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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('Taksasi') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PIC</th>

                            @if(session('role') == 1 or session('role') == 2 or session('role') == 3)
                            <th>Created</th>
                            <th>Action</th>
                            @endif
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($taxations as $taxation)
                        <tr>
                            <td>{{ $taxation->id }}</td>
                            <td>{{ $taxation->opr }}</td>
                            <td>{{ $taxation->created_at }}</td>
                            
                            @if(session('role') == 1 or session('role') == 2 or session('role') == 3)
                            <td>
                                <a href="{{ route('taxations.show', $taxation->id) }}" type="button" class="btn btn-success" target="_blank">
                                    Show
                                </a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $taxation->id }}">
                                    Hapus
                                </button>
                            </td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">

            @if(session('role') == 1 or session('role') == 2 or session('role') == 3)
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Tambah {{ ucfirst('Taksasi') }}
            </button>
            @endif

        </div>
    </div>
</div>
@endsection

@if(session('role') == 1 or session('role') == 2 or session('role') == 3)
@section('modal')
@include('taxation.create')
@include('taxation.delete')
@endsection
@endif
