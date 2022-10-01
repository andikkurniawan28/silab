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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('moisture') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Barcode</th>
                            <th>Sampel</th>
                            <th>Kadar Air</th>
                            <th>Analis</th>
                            <th>Mandor</th>
                            <th>Jam Analisa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($moistures as $moisture)
                        <tr>
                            <td>{{ $moisture->id }}</td>
                            <td>{{ $moisture->sampling_id }}</td>
                            <td>{{ $moisture->sample_name }}</td>
                            <td>{{ $moisture->moisture_content }}</td>
                            <td>{{ $moisture->analyst }}</td>
                            <td>{{ $moisture->leader }}</td>
                            <td>{{ $moisture->created_at }}</td>
                            <td>

                                @if($moisture->is_verified == 0 or session('role') == 1)
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $moisture->id }}">
                                    Edit
                                </button>
                                @else
                                <span class="badge badge-info">Locked <i class="fas fa-lock"></i></span>
                                @endif
                                
                                @if(session('role') == 1 or session('role') == 5)
                                <form action="{{ route('verifyMoisture') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="id" value="{{ $moisture->id }}">
                                    <input type="hidden" name="leader" value="{{ session('name') }}">
                                    <input type="hidden" name="role" value="{{ session('role') }}">
                                    
                                    @if($moisture->is_verified == 0)
                                    <button type="submit" class="btn btn-info">Verifikasi</button>
                                    @endif

                                    @if(session('role') == 1)
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $moisture->id }}">
                                        Hapus
                                    </button>
                                    @endif

                                </form>
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
                Tambah {{ ucfirst('moisture') }}
            </button>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('moisture.create')
@include('moisture.edit')
@include('moisture.delete')
@endsection
