
@extends('layouts.master')
 
@section('content')
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data pinjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pinjamans.create') }}"> Tambah Pinjaman</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
          
            <th>Penanggung Jawab</th>
            <th>Ruang</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($pinjamans as $pinjaman)
        <tr>
        
            <td>{{ $pinjaman-> pj}}</td>
            <td>{{ $pinjaman-> ruang}}</td>
            <td>{{ $pinjaman-> barang}}</td>
            <td>{{ $pinjaman-> jumlah}}</td>
            <td>{{ $pinjaman-> kondisi}}</td>

            <td>
                <form action="{{ route('pinjamans.destroy',$pinjaman->id) }}" method="POST">
   
                    
                    <a class="btn btn-primary" href="{{ route('pinjamans.edit',$pinjaman->id) }}">Edit</a>
      @csrf
      @method('DELETE')
     <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection