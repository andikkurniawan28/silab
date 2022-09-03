@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('keliling') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover" id="" width="100%" cellspacing="0">
                    <thead>
                    @foreach ($arounds as $around)
                    <tr>
                        <th>created</th>
                        <td>{{ $around->created_at }}</td>
                    </tr>

                    @for($i=1; $i<=2; $i++)
                        <tr>
                            <th>Tekanan Pre-Evap{{ $i }}</th>
                            @switch($i)
                                @case(1)
                                <td>{{ $around->tek_pe1 }}</td>
                                @break
                                @case(2)
                                <td>{{ $around->tek_pe2 }}</td>
                                @break
                            @endswitch
                        </tr>
                    @endfor

                    @for($i=1; $i<=7; $i++)
                        <tr>
                            <th>Tekanan Evaporator{{ $i }}</th>
                            @switch($i)
                                @case(1)
                                <td>{{ $around->tek_evap1 }}</td>
                                @break
                                @case(2)
                                <td>{{ $around->tek_evap2 }}</td>
                                @break
                                @case(3)
                                <td>{{ $around->tek_evap3 }}</td>
                                @break
                                @case(4)
                                <td>{{ $around->tek_evap4 }}</td>
                                @break
                                @case(5)
                                <td>{{ $around->tek_evap5 }}</td>
                                @break
                                @case(6)
                                <td>{{ $around->tek_evap6 }}</td>
                                @break
                                @case(7)
                                <td>{{ $around->tek_evap7 }}</td>
                                @break
                            @endswitch
                        </tr>
                    @endfor

                    @for($i=1; $i<=14; $i++)
                        <tr>
                            <th>Tekanan Pan Masakan{{ $i }}</th>
                            @switch($i)
                                @case(1)
                                <td>{{ $around->tek_pan1 }}</td>
                                @break
                                @case(2)
                                <td>{{ $around->tek_pan2 }}</td>
                                @break
                                @case(3)
                                <td>{{ $around->tek_pan3 }}</td>
                                @break
                                @case(4)
                                <td>{{ $around->tek_pan4 }}</td>
                                @break
                                @case(5)
                                <td>{{ $around->tek_pan5 }}</td>
                                @break
                                @case(6)
                                <td>{{ $around->tek_pan6 }}</td>
                                @break
                                @case(7)
                                <td>{{ $around->tek_pan7 }}</td>
                                @break
                                @case(8)
                                <td>{{ $around->tek_pan8 }}</td>
                                @break
                                @case(9)
                                <td>{{ $around->tek_pan9 }}</td>
                                @break
                                @case(10)
                                <td>{{ $around->tek_pan10 }}</td>
                                @break
                                @case(11)
                                <td>{{ $around->tek_pan11 }}</td>
                                @break
                                @case(12)
                                <td>{{ $around->tek_pan12 }}</td>
                                @break
                                @case(13)
                                <td>{{ $around->tek_pan13 }}</td>
                                @break
                                @case(14)
                                <td>{{ $around->tek_pan13 }}</td>
                                @break
                            @endswitch
                        </tr>
                    @endfor

                    @for($i=1; $i<=2; $i++)
                        <tr>
                            <th>Suhu Pre-Evap{{ $i }}</th>
                            @switch($i)
                                @case(1)
                                <td>{{ $around->suhu_pe1 }}</td>
                                @break
                                @case(2)
                                <td>{{ $around->suhu_pe2 }}</td>
                                @break
                            @endswitch
                        </tr>
                    @endfor

                    @for($i=1; $i<=7; $i++)
                        <tr>
                            <th>Suhu Evaporator{{ $i }}</th>
                            @switch($i)
                                @case(1)
                                <td>{{ $around->suhu_evap1 }}</td>
                                @break
                                @case(2)
                                <td>{{ $around->suhu_evap2 }}</td>
                                @break
                                @case(3)
                                <td>{{ $around->suhu_evap3 }}</td>
                                @break
                                @case(4)
                                <td>{{ $around->suhu_evap4 }}</td>
                                @break
                                @case(5)
                                <td>{{ $around->suhu_evap5 }}</td>
                                @break
                                @case(6)
                                <td>{{ $around->suhu_evap6 }}</td>
                                @break
                                @case(7)
                                <td>{{ $around->suhu_evap7 }}</td>
                                @break
                            @endswitch
                        </tr>
                    @endfor

                    @for($i=1; $i<=3; $i++)
                        <tr>
                            <th>Suhu Heater{{ $i }}</th>
                            @switch($i)
                                @case(1)
                                <td>{{ $around->suhu_heater1 }}</td>
                                @break
                                @case(2)
                                <td>{{ $around->suhu_heater2 }}</td>
                                @break
                                @case(3)
                                <td>{{ $around->suhu_heater3 }}</td>
                                @break
                            @endswitch
                        </tr>
                    @endfor
                    
                    <tr>
                        <th>Air Injeksi</th>
                        <td>{{ $around->suhu_air_injeksi }}</td>
                    </tr>
                    
                    <tr>
                        <th>Air Terjun</th>
                        <td>{{ $around->suhu_air_terjun }}</td>
                    </tr>
                    
                    <tr>
                        <th>Uap Baru</th>
                        <td>{{ $around->uap_baru }}</td>
                    </tr>
                    
                    <tr>
                        <th>Uap Bekas</th>
                        <td>{{ $around->uap_bekas }}</td>
                    </tr>
                    
                    <tr>
                        <th>Uap 3Ato</th>
                        <td>{{ $around->uap_3ato }}</td>
                    </tr>

                    @endforeach
                </thead>
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
@endsection
