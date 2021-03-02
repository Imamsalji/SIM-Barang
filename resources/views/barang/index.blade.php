@extends('layouts.master')
@section('title', 'Data Barang')
@section('pagetitle')
    <h1>Data Barang</h1>
@endsection
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('create_barang') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Data</a>
           <a href="{{ route('kategori') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Kategori</a>
        <a href="{{ route('satuan') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Satuan</a>
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
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Kategori</th>
                                <th>nama barang</th>
                                <th>satuan</th>
                                <th>kondisi_baik</th>
                                <th>Rusak</th>
                                <th>total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $item)
                            <tr> 
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->kategori->name }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->satuan->name }}</td>
                                <td>{{ $item->kondisi_baik }}</td>
                                <td>{{ $item->kondisi_rusak }}</td>
                                <td>{{ $item->total }}</td>
                                <td>
                                    <a href="{{route('barangedit', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                                    <a href="{{route('hapusbarang', $item->id)}}" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger">Delete</a>
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
