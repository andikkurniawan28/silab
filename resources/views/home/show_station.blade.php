@extends('layouts.app')

@section('content')

<div class="container-fluid">
    
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ strtoupper($title) }}</h1>
     </div>

    @if($message = Session::get('error'))
        @include('components.alert', ['message'=>$message, 'color'=>'danger'])
    @endif

    @if($message = Session::get('success'))
        @include('components.alert', ['message'=>$message, 'color'=>'danger'])
    @endif

    
    <div class="row">

        @foreach($samples as $sample)
            @switch($sample->method_id)

                {{-- Atur Lebar Card disini --}}
                @case(1)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                    @break
                @case(2)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                @case(3)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                @case(4)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                    @break
                @case(5)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                    @break
                @case(6)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                @case(7)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                @case(8)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                @case(9)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                    @break
                @case(10)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                @case(11)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                @case(12)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                @default
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    @break
                    
            @endswitch
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="font-weight-bold text-primary text-uppercase mb-1">
                           <a href="{{ route('methods-result',
                                [
                                    $sample->id, 
                                    $sample->method_id,
                                     $sample->name,
                                ]) }}">
                                {{ $sample->name }}
                            </a>
                        </div>
                        <table class="table table-sm table-hover text-center text-light text-xs table-dark">
                            <tr>
                                <th>Jam</th>
                                @switch($sample->method_id)

                                    {{-- Atur Parameter yang ditampilkan disini --}}
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
                            @for($i=0; $i<count($barcode[$sample->id]); $i++)
                            <tr>
                                <td>{{ date('H:i', strtotime($barcode[$sample->id][$i]['created_at'])) }}</td>
                                @switch($sample->method_id)

                                    {{-- Atur Value yang ditampilkan disini --}}
                                    @case(1)
                                        <td>{{ $barcode[$sample->id][$i]['icumsa'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['moisture_content'] }}</td>
                                        <td>
                                            @if($barcode[$sample->id][$i]['moisture_content'] > 0)
                                            {{ 100 - $barcode[$sample->id][$i]['moisture_content'] }}
                                            @endif
                                        </td>
                                        <td></td>
                                        <td>{{ $barcode[$sample->id][$i]['so2'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['bjb'] }}</td>
                                        @break
                                    @case(2)
                                        <td>{{ $barcode[$sample->id][$i]['percent_brix'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['percent_pol'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['purity'] }}</td>
                                        @break
                                    @case(3)
                                        <td>{{ $barcode[$sample->id][$i]['corrected_pol'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['dry'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['water'] }}</td>
                                        @break
                                    @case(4)
                                        <td>{{ $barcode[$sample->id][$i]['percent_brix'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['percent_pol'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['purity'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['icumsa'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['cao'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['ph_umum'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['turbidity'] }}</td>
                                        @break
                                    @case(5)
                                        <td>{{ $barcode[$sample->id][$i]['percent_brix'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['percent_pol'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['purity'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['icumsa'] }}</td>
                                        @break
                                    @case(6)
                                        <td>{{ $barcode[$sample->id][$i]['percent_brix'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['tsai'] }}</td>
                                        @break
                                    @case(7)
                                        <td>{{ $barcode[$sample->id][$i]['corrected_pol'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['water'] }}</td>
                                        @break
                                    @case(8)
                                        <td>{{ $barcode[$sample->id][$i]['pol'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['moisture_content'] }}</td>
                                        @break
                                    @case(9)
                                        <td>{{ $barcode[$sample->id][$i]['tds'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['ph_ketel'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['hardness'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['phospate'] }}</td>
                                        @break
                                    @case(10)
                                        <td>{{ $barcode[$sample->id][$i]['icumsa'] }}</td>
                                        <td>{{ $barcode[$sample->id][$i]['moisture_content'] }}</td>
                                        @break
                                @endswitch
                            </tr>
                            @endfor
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
       

</div>

@endsection