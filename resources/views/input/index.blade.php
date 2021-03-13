@extends('layouts.master')
@section('title', 'Barang Masuk')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Pemasokan Barang</h1>
@endsection
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('dana') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Sumber Dana</a>
        <a href="{{ route('toko') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Toko</a>
        <hr>
        <li class="btn btn-outline-primary ">
                <a href="#" class="" data-toggle="dropdown">
                <i class="fas fa-clipboard-list"></i>
                    <span>Masukan Jenis Barang yang dimasukan</span>
                    </a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ route('inputcreate') }}">Pemberian</a></li>
                    <li class=""><a class="nav-link" href="{{ route('inputcreatetwo') }}">Pembelian</a></li>
                </ul>
            </li>
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
                                <th>Nama Barang</th>
                                <th>Jenis Pemasukan</th>
                                <th>Yang memberikan</th>
                                <th>Sumber Dana</th>
                                <th>Toko yang bersangkutan</th>
                                <th>Jumlah Barang yang Masuk</th>
                                <th>Tanggal Barang masuk</th>
                                <th>Nomor Faktur</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inputs as $item)
                            <tr> 
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->barang->nama_barang }}</td>
                                <td>{{ $item->jenis_masuk }}</td>
                                @if ($item->nama_pemberi == NULL)
                                <td>hasil pembelian</td>
                                @else
                                <td>{{ $item->nama_pemberi }}</td>
                                @endif
                                @if ($item->dana_id == NULL)
                                <td>Hasil Pemberian</td>
                                <td>Hasil pemberian</td>
                                @else
                                <td>{{ $item->dana->pemberi }}</td>
                                <td>{{ $item->toko->name }}</td>
                                @endif
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->tgl_faktur }}</td>
                                <td>{{ $item->nofaktur }}</td>
                                <td>
                                @if ($item->nama_pemberi == NULL || $item->nama_pemberi == '')
                                    <a href="{{route('inputedittwo', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                                @else
                                <a href="{{route('inputedit', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                                @endif
                                    <a href="{{url('input', $item->id)}}" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger">Delete</a>
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
