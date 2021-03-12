@extends('layouts.master')
@section('title', 'Data Barang')
@section('pagetitle')
    <h1>Data Barang Habis Pakai</h1>
@endsection
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('habis.create') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Data</a>
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
                                <th>Nama Barang</th>
                                <th>Merek</th>
                                <th>Spesifikasi</th>
                                <th>No Seri</th>
                                <th>No faktur</th>
                                <th>Harga</th>
                                <th>Toko</th>
                                <th>Sumber Dana</th>
                                <th>Kategori</th>
                                <th>Tanggal Masuk</th>
                                <th>Total Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($habis as $item)
                            <tr> 
                            <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->merk }}</td>
                                <td>{{ $item->spek }}</td>
                                <td>{{ $item->no_seri }}</td>
                                <td>{{ $item->no_faktur }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->toko->name }}</td>
                                <td>{{ $item->dana->pemberi }}</td>
                                <td>{{ $item->kategori->name }}</td>
                                <td>{{ $item->tgl_masuk }}</td>
                                <td>{{ $item->total }}</td>
                                <td>
                                    <a href="{{route('habis.edit', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                                    <form action="{{ route('habis.destroy',$item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger">Delete</button>
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
