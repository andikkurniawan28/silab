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
            <h5 class="m-0 font-weight-bold text-primary">{{ 'Laporan' }}</h5>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Laporan Lab QA
                            </div>
                            <form action="{{ route('showDailyReport') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" name="shift">
                                            <option value="0">Harian</option>
                                            <option value="1">Pagi</option>
                                            <option value="2">Sore</option>
                                            <option value="3">Malam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="handling" value="print" class="btn btn-primary">Cetak Layar <i class='fas fa-print'></i></button>
                                    <button type="submit" name="handling" value="export" class="btn btn-primary">Export <i class='fas fa-download'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-secondary text-uppercase mb-1">
                                Laporan Core Sample
                            </div>
                            <form action="{{ route('showDailyReportCoreSample') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" name="shift">
                                            <option value="0">Harian</option>
                                            <option value="1">Pagi</option>
                                            <option value="2">Sore</option>
                                            <option value="3">Malam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="handling" value="print" class="btn btn-secondary">Cetak Layar <i class='fas fa-print'></i></button>
                                    <button type="submit" name="handling" value="export" class="btn btn-secondary">Export <i class='fas fa-download'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-success text-uppercase mb-1">
                                Core Sample by KUD
                            </div>
                            <form action="{{ route('showCoreByRegister') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" name="register">
                                            @foreach ($registers as $register)
                                                <option value="{{ $register->code }}">{{ $register->region }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="handling" value="print" class="btn btn-success">Cetak Layar <i class='fas fa-print'></i></button>
                                    <button type="submit" name="handling" value="export" class="btn btn-success">Export <i class='fas fa-download'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-danger text-uppercase mb-1">
                                Core Sample by Pos
                            </div>
                            <form action="{{ route('showCoreByPost') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" name="post">
                                            @foreach ($posts as $post)
                                                <option value="{{ $post->code }}">{{ $post->region }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="handling" value="print" class="btn btn-danger">Cetak Layar <i class='fas fa-print'></i></button>
                                    <button type="submit" name="handling" value="export" class="btn btn-danger">Export <i class='fas fa-download'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-info text-uppercase mb-1">
                                Core Sample by Program
                            </div>
                            <form action="{{ route('showCoreByProgram') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" name="program">
                                            @foreach ($programs as $program)
                                                <option value="{{ $program->code }}">{{ $program->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="handling" value="print" class="btn btn-info">Cetak Layar <i class='fas fa-print'></i></button>
                                    <button type="submit" name="handling" value="export" class="btn btn-info">Export <i class='fas fa-download'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Akumulatif KUD
                            </div>
                            <form action="{{ route('rangkingByRegister') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')

                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" name="handling" value="print" class="btn btn-primary">Cetak Layar <i class='fas fa-print'></i></button>
                                    <button type="submit" name="handling" value="export" class="btn btn-primary">Export <i class='fas fa-download'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="font-weight-bold text-secondary text-uppercase mb-1">
                                Akumulatif Pos
                            </div>
                            <form action="{{ route('rangkingByPost') }}" method="POST" target="_blank">
                                @csrf
                                @method('POST')

                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="text1" name="date" type="date" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" name="handling" value="print" class="btn btn-secondary">Cetak Layar <i class='fas fa-print'></i></button>
                                    <button type="submit" name="handling" value="export" class="btn btn-secondary">Export <i class='fas fa-download'></i></button>
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
