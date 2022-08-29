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
            <h5 class="m-0 font-weight-bold text-primary">Barcode</h5>
        </div>
        <div class="card-body">
            <div class="row">
            @foreach ($samples as $sample)
                <div class="col-md-3 text-center">
                    <div class="card shadow mb-4">

                        @if($sample->station_id == 1)
                        <div class="card-header py-3 bg-primary">
                        @elseif($sample->station_id == 2)
                        <div class="card-header py-3 bg-secondary">
                        @elseif($sample->station_id == 3)
                        <div class="card-header py-3 bg-success">
                        @elseif($sample->station_id == 4)
                        <div class="card-header py-3 bg-danger">
                        @elseif($sample->station_id == 5)
                        <div class="card-header py-3 bg-info">
                        @elseif($sample->station_id == 6)
                        <div class="card-header py-3 bg-warning">
                        @elseif($sample->station_id == 7)
                        <div class="card-header py-3 bg-danger">
                        @elseif($sample->station_id == 8)
                        <div class="card-header py-3 bg-primary">
                        @elseif($sample->station_id == 9)
                        <div class="card-header py-3 bg-secondary">
                        @elseif($sample->station_id == 10)
                        <div class="card-header py-3 bg-success">
                        @elseif($sample->station_id == 11)
                        <div class="card-header py-3 bg-danger">
                        @elseif($sample->station_id == 12)
                        <div class="card-header py-3 bg-info">
                        @else
                        <div class="card-header py-3 bg-warning">
                        @endif
                            
                            <a href="#" data-toggle="modal" data-target="#edit{{ $sample->id }}"><h6 class="m-0 font-weight-bold text-white">{{ $sample->name }}</h5></a>
                        </div>
                        <div class="card-body bg-dark">
                            <form action="{{ route('samplings.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <input type="hidden" value="{{ $sample->id }}" name="sample_id">
                                
                                @if($sample->station_id == 1)
                                <button type="submit" class="btn btn-primary">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 2)
                                <button type="submit" class="btn btn-secondary">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 3)
                                <button type="submit" class="btn btn-success">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 4)
                                <button type="submit" class="btn btn-danger">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 5)
                                <button type="submit" class="btn btn-info">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 6)
                                <button type="submit" class="btn btn-warning text-dark">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 7)
                                <button type="submit" class="btn btn-danger">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 8)
                                <button type="submit" class="btn btn-primary">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 9)
                                <button type="submit" class="btn btn-secondary">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 10)
                                <button type="submit" class="btn btn-success">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 11)
                                <button type="submit" class="btn btn-danger">Cetak <i class="fas fa-print"></i></button>
                                @elseif($sample->station_id == 12)
                                <button type="submit" class="btn btn-info">Cetak <i class="fas fa-print"></i></button>
                                @else
                                <button type="submit" class="btn btn-warning text-dark">Cetak <i class="fas fa-print"></i></button>
                                @endif

                                
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('samplings.create') }}" type="button" class="btn btn-primary">
                Cek Barcode Tercetak
            </a>
            <a href="{{ route('samples.index') }}" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#create">
                Tambah Sampel
            </a>
        </div>
    </div>
</div>
@endsection

@section('modal')
@include('sample.create') 
@include('sample.edit')
{{-- @include('sampling.delete') --}}
@endsection
