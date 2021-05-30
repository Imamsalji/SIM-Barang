@extends('layouts.master')
@section('title', 'Tambah Mutasi')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Create Mutasi</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('mutasisave') }}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_barang') class="text-danger" 
                        @enderror>Nama Barang @error('nama_barang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_barang" type="text" name="nama_barang" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('ruang_asal') class="text-danger" 
                        @enderror>Ruangan Asal @error('ruang')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="ruang_asal" id="ruang_asal">
                            @foreach($rooms as $room)
                                <option value="{{$room->noruang}}">{{$room->noruang}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('ruang_tujuan') class="text-danger" 
                        @enderror>Ruangan Tujuan @error('ruang_tujuan')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="ruang_asal" id="ruang_asal">
                            @foreach($rooms as $room)
                                <option value="{{$room->noruang}}">{{$room->noruang}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('mutasi') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection
