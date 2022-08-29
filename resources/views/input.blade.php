@extends('layouts.app')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
<div class="container-fluid">

    @if($message = Session::get('error'))
        @include('components.alert', ['message'=>$message, 'color'=>'danger'])
    @endif

    @if($message = Session::get('success'))
        @include('components.alert', ['message'=>$message, 'color'=>'danger'])
    @endif

            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Barcode Sampel</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <button type="button" class="btn btn-primary">Masuk</button>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-barcode fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

</div>
@endsection