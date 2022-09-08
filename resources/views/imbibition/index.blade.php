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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('Imbibisi') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Totalizer</th>
                            <th>Flow</th>

                            @if(session('role') == 1 or session('role') == 2 or session('role') == 3)
                            <th>Created</th>
                            <th>Action</th>
                            @endif

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imbibitions as $imbibition)
                        <tr>
                            <td>{{ $imbibition->id }}</td>
                            <td>{{ $imbibition->totalizer }}</td>
                            <td>{{ $imbibition->flow }}</td>
                            <td>{{ $imbibition->created_at }}</td>

                            @if(session('role') == 1 or session('role') == 2 or session('role') == 3)
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $imbibition->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $imbibition->id }}">
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
                Tambah {{ ucfirst('Imbibisi') }}
            </button>
            @endif
        </div>
    </div>
</div>
@endsection

@if(session('role') == 1 or session('role') == 2 or session('role') == 3)
@section('modal')
@include('imbibition.create')
@include('imbibition.edit')
@include('imbibition.delete')
@endsection
@endif
