@extends('layouts.master')
@section('title', 'Tambah Peminjaman')
@section('pagetitle')
    <h1>Create Peminjaman</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('pinjamsave') }}" method="POST">
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
                        <select class="form-control" name="ruang" id="ruang">
                            @foreach($rooms as $room)
                                <option value="{{$room->noruang}}">{{$room->noruang}}</option>
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
                            @foreach ($barangs as $item)
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

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('kondisi') class="text-danger" 
                          @enderror>Kondisi @error('kondisi')
                               {{ $message }}
                            @enderror
                          </label>
                          <select class="form-control" name="kondisi" id="kondisi">
                            <option value disable>Pilih Kondisi</option>
                                <option value="baik">Baik</option>
                                <option value="tidakbaik">Tidak Baik</option>
                          </select>
                        </div>
                      </div>

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
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
