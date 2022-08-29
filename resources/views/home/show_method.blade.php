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
            <h5 class="m-0 font-weight-bold text-primary">{{ strtoupper($sample_name) }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Diambil</th>
                            <th>Barcode</th>
                            @switch($method_id)
                                @case(1)
                                <th>Icumsa</th>
                                <th>Moisture</th>
                                @break
                                @case(1)
                                <th>Polbaca</th>
                                <th>% Brix</th>
                                <th>% Pol</th>
                                <th>HK</th>
                                @break
                            @endswitch

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($samples as $sample)
                        <tr>
                            <td>{{ $sample->created_at }}</td>
                            <td>{{ $sample->id }}</td>
                            @switch($method_id)
                                @case(1)
                                <td>{{ $sample->icumsa }}</td>
                                <td>{{ $sample->moisture_content }}</td>
                                @break
                                @case(2)
                                <td>{{ $sample->pol }}</td>
                                <td>{{ $sample->percent_brix }}</td>
                                <td>{{ $sample->percent_pol }}</td>
                                <td>{{ $sample->purity }}</td>
                                @break
                            @endswitch
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Tambah {{ ucfirst('sample') }}
            </button> --}}
        </div>
    </div>
</div>
@endsection
