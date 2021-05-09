@extends('layouts.master')
@section('title', 'Tambah Peminjaman')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Create Peminjaman</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('peminjamansave') }}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('pj') class="text-danger" 
                        @enderror>Penanggung Jawab @error('pj')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="pj" type="text" name="pj" value="{{ old('pj') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('ruang') class="text-danger" 
                        @enderror>Ruangan @error('ruang')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="ruang_id" id="ruang_id">
                            @foreach($rooms as $room)
                                <option value="{{$room->id}}">{{$room->noruang}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('barang_id') class="text-danger" 
                        @enderror>Barang @error('barang_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="barang_id" id="barang_id">
                            <option value disable>Pilih Barang</option>
                            @foreach ($habis as $item)
                            <option value="{{ $item->id }}" data-stok="{{ $item->total }}">{{ $item->nama_barang }}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('jumlah') class="text-danger" 
                          @enderror>Jumlah @error('jumlah')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="jumlah" type="number" name="jumlah" value="{{ old('jumlah') }}" class="form-control">
                        </div>
                      </div>

                     
                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('peminjaman') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script>
$(document).ready(function(){
    $('select').change(function(){
      let stok = $(this).find(':selected').data('total');
      $('#jumlah').keyup(function(){
          let jumlah = $('#jumlah').val()
          if(jumlah > total){
            $('#jumlah').val();
            alert('Stok Tidak Mencukupi');
          }else{
            console.log(total);
            }
          }
      })
  })
});
</script>
@endpush
