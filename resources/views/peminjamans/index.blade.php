@extends('layouts.master')
@section('title', 'Data Peminjaman')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Data Peminjaman Barang Habis Pakai</h1>
@endsection
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('peminjamancreate') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Data</a>
           <hr>
           <div class="card">
               <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>
                            {{ session('message') }}
                        </div>
                    </div>
                    @elseif (session('delete'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>
                            {{ session('delete') }}
                        </div>
                    </div>
                    @endif
                    <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered table-md">
                        <thead>
                        <tr>
                            <th>no</th>
                            <th>Penanggung Jawab</th>
                            <th>Ruang</th>
                            <th>Barang</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjamans as $peminjaman)
                            <tr> 
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peminjaman->pj}}</td>
                                <td>{{ $peminjaman->ruang}}</td>
                                <td>{{ $peminjaman->habis->nama_barang}}</td>
                                <td>{{ $peminjaman->jumlah}}</td>
                                <td>
                                    <form action="{{route('peminjamanhapus', $peminjaman->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                            <button  class="btn btn-outline-danger">Habis</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
  
@endpush

@push('after-script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@endpush
