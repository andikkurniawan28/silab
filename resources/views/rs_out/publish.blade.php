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
            <h5 class="m-0 font-weight-bold text-primary">{{ ucfirst('Timbangan RS Out') }}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-dark table-hover table-sm" id="" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Yesterday</th>
                            <th>Today</th>
                            <th>Until Yesterday</th>
                            <th>Until Today</th>
                            <th>Until Now</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $data['sum_yesterday'] }}</td>
                            <td>{{ $data['sum_today'] }}</td>
                            <td>{{ $data['sum_until_yesterday'] }}</td>
                            <td>{{ $data['sum_until_today'] }}</td>
                            <td>{{ $data['sum_until_now'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered text-dark table-hover table-sm" id="" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Time</th>
                            <th>Netto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i<24; $i++)
                        <tr>
                            <td>{{ $i }}:00 - {{ $i+1 }}:00</td>
                            <td>{{ $data['sum_hourly'][$i] }}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>

            </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
</div>
@endsection
