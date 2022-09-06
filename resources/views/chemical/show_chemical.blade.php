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
            <h5 class="m-0 font-weight-bold text-primary">{{ strtoupper('chemical') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            {{-- <th>Kapur</th> --}}
                            <th>Belerang</th>
                            <th>Floc</th>
                            <th>B894</th>
                            <th>B895</th>
                            <th>B210</th>
                            <th>Pengambilan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chemicals as $chemical)
                        <tr>
                            <td>{{ $chemical->id }}</td>
                            {{-- <td>{{ $chemical->kapur }}</td> --}}
                            <td>{{ $chemical->belerang }}</td>
                            <td>{{ $chemical->floc }}</td>
                            <td>{{ $chemical->b894 }}</td>
                            <td>{{ $chemical->b895 }}</td>
                            <td>{{ $chemical->b210 }}</td>
                            <td>{{ $chemical->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
