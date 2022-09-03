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
            <h5 class="m-0 font-weight-bold text-primary">eRonsel</h5>
        </div>
        <div class="card-body">
            <form method ="POST" action="{{ route('saveRonsel') }}" target="_blank">
            @csrf
            @method('POST')
														
                <div class="form-group row">
                    <label for="inputState" class="col-sm-2 col-form-label">Jenis Masakan</label>
                    <div class="col-sm-10">
                        <select id="inputState" name ='sample_id' class="form-control">
                            @foreach ($samples as $sample)
                            <option value='{{ $sample->id }}'>{{ $sample->name }}</option> 
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputState" class="col-sm-2 col-form-label">Pan / Palung</label>
                    <div class="col-sm-5">
                        <select id="inputState" name ='pan' class="form-control">
                            <option value='1'>Pan 1</option>
                            <option value='2'>Pan 2</option>
                            <option value='3'>Pan 3</option>
                            <option value='4'>Pan 4</option>
                            <option value='5'>Pan 5</option>
                            <option value='6'>Pan 6</option>
                            <option value='7'>Pan 7</option>
                            <option value='8'>Pan 8</option>
                            <option value='9'>Pan 9</option>
                            <option value='10'>Pan 10</option>
                            <option value='11'>Pan 11</option>
                            <option value='12'>Pan 12</option>
                            <option value='13'>Pan 13</option>
                            <option value='14'>Pan 14</option>
                            <option value='15'>Pan 15</option>
                            <option value='16'>Pan 16</option>
                            <option value='17'>Pan 17</option>
                            <option value='18'>Pan 18</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <select id="inputState" name ='reef' class="form-control">
                            <option value='1'>Palung 1</option>
                            <option value='2'>Palung 2</option>
                            <option value='3'>Palung 3</option>
                            <option value='4'>Palung 4</option>
                            <option value='5'>Palung 5</option>
                            <option value='6'>Palung 6</option>
                            <option value='7'>Palung 7</option>
                            <option value='8'>Palung 8</option>
                            <option value='9'>Palung 9</option>
                            <option value='10'>Palung 10</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Volume Masakan<sub>(Hl)</sub></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Contoh : 1000" name='volume' required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><i class='fas fa-clock'></i> Masak / Turun</label>
                    <div class="col-sm-5">
                      <input type="time" class="form-control" id="inputPassword3" placeholder="Contoh : 1000" name='start_time' required>
                    </div>
                    <div class="col-sm-5">
                      <input type="time" class="form-control" id="inputPassword3" placeholder="Contoh : 1000" name='end_time' required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><i class='fas fa-user'></i> Operator Masak</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name='name' placeholder='Masukkan Nama Tukang Masak . . . ' maxlength="8" required>
                    </div>
                </div>
              
                <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit <i class='fas fa-check-circle'></i></button>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
</div>
@endsection

@section('modal')

@endsection
