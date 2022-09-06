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
                                <th>IU</th>
                                <th>Air</th>
                                <th>Brix</th>
                                <th>Pol</th>
                                <th>SO2</th>
                                <th>BJB</th>
                                @break
                            @case(2)
                                <th>Brix</th>
                                <th>Pol</th>
                                <th>HK</th>
                                @break
                            @case(3)
                                <th>Pol</th>
                                <th>ZK</th>
                                <th>Air</th>
                                @break
                            @case(4)
                                <th>Brix</th>
                                <th>Pol</th>
                                <th>HK</th>
                                <th>IU</th>
                                <th>CaO</th>
                                <th>pH</th>
                                <th>Turb</th>
                                @break
                            @case(5)
                                <th>Brix</th>
                                <th>Pol</th>
                                <th>HK</th>
                                <th>IU</th>
                                @break
                            @case(6)
                                <th>Brix</th>
                                <th>TSAI</th>
                                @break
                            @case(7)
                                <th>Pol</th>
                                <th>Air</th>
                                @break
                            @case(8)
                                <th>Pol</th>
                                <th>Air</th>
                                @break
                            @case(9)
                                <th>TDS</th>
                                <th>pH</th>
                                <th>Sadah</th>
                                <th>Phospat</th>
                                @break
                            @case(10)
                                <th>IU</th>
                                <th>Air</th>
                                @break
                            @case(11)
                                <th>Kapur</th>
                                @break
                            @case(12)
                                <th>PI</th>
                                <th>Sabut</th>
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
                                <td>{{ 100 - $sample->moisture_content }}</td>
                                <td>{{ number_format(($sample->purity*(100-$sample->moisture_content))/100,2) }}</td>
                                <td>{{ $sample->so2 }}</td>
                                <td>{{ $sample->bjb }}</td>
                                @break
                            @case(2)
                                <td>{{ $sample->percent_brix }}</td>
                                <td>{{ $sample->percent_pol }}</td>
                                <td>{{ $sample->purity }}</td>
                                @break
                            @case(3)
                                <td>{{ $sample->corrected_pol }}</td>
                                <td>{{ $sample->dry }}</td>
                                <td>{{ $sample->water }}</td>
                                @break
                            @case(4)
                                <td>{{ $sample->percent_brix }}</td>
                                <td>{{ $sample->percent_pol }}</td>
                                <td>{{ $sample->purity }}</td>
                                <td>{{ $sample->icumsa }}</td>
                                <td>{{ $sample->cao }}</td>
                                <td>{{ $sample->ph_umum }}</td>
                                <td>{{ $sample->turbidity }}</td>
                                @break
                            @case(5)
                                <td>{{ $sample->percent_brix }}</td>
                                <td>{{ $sample->percent_pol }}</td>
                                <td>{{ $sample->purity }}</td>
                                <td>{{ $sample->icumsa }}</td>
                                @break
                            @case(6)
                                <td>{{ $sample->percent_brix }}</td>
                                <td>{{ $sample->tsai }}</td>
                                @break
                            @case(7)
                                <td>{{ $sample->pol }}</td>
                                <td>{{ $sample->moisture_content }}</td>
                                @break
                            @case(8)
                                <td>{{ $sample->pol }}</td>
                                <td>{{ $sample->water }}</td>
                                @break
                            @case(9)
                                <td>{{ $sample->tds }}</td>
                                <td>{{ $sample->ph_ketel }}</td>
                                <td>{{ $sample->hardness }}</td>
                                <td>{{ $sample->phospate }}</td>
                                @break
                            @case(10)
                                <td>{{ $sample->icumsa }}</td>
                                <td>{{ $sample->moisture_content }}</td>
                                @break
                            @case(11)
                                <td>{{ $sample->calcium }}</td>
                                @break
                            @case(12)
                                <td>{{ $sample->pi }}</td>
                                <td>{{ $sample->fiber }}</td>
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
