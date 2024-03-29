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
            <h5 class="m-0 font-weight-bold text-primary">{{ 'Certificate of Analysis' }}</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                COA Tetes
                            </div>
                            <form action="{{ route('showCoaTetes') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <button name="submit" type="submit" class="btn btn-primary">Cetak Layar <i class='fas fa-print'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-secondary text-uppercase mb-1">
                                COA Kapur
                            </div>
                            <form action="{{ route('showCoaKapur') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <button name="submit" type="submit" class="btn btn-secondary">Cetak Layar <i class='fas fa-print'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
</div>
@endsection
