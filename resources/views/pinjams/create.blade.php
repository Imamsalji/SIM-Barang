@extends('layouts.master')
  
@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pinjamsave') }}" method="POST">
    @csrf
  
     <div class="row">
     
     
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penanggung Jawab</strong>
                <input class="form-control"name="pj"  >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ruang</strong>
                <select class="form-control" name="ruang" id="ruang">
                @foreach($rooms as $room)
                <option value="{{$room->noruang}}">{{$room->noruang}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Barang</strong>
                <select class="form-control" name="barang" id="barang">
                @foreach($barangs as $barang)
                <option value="{{$barang->nama_barang}}">{{$barang->nama_barang}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah</strong>
                <input class="form-control"name="jumlah" type = "number" autocomplete = off>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi</strong>
                <select class="form-control" name="kondisi">
                    <option value="baik">Baik</option>
                    <option value="tidakbaik">Tidak Baik</option>
                </select>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Buat</button>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js') }}"></script>
    <script type="text/css" src="{{ URL::asset('js/jquery.css') }}"></script>
  
</form>
@endsection