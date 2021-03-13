@extends('layouts.master')
@section('title', 'Data Ruangan')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Data Ruangan</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="{{ route('create_ruangan') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Data</a>
            <a href="{{ route('klasifikasi') }}" class="btn btn-outline-primary" ><i class="far fa-edit"></i>Tambah Klasifikasi</a>
            <a href="{{ route('rayon') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Rayon</a>
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
                                <th>klasifikasi_id</th>
                                <th>noruang</th>
                                <th>nama_ruang</th>
                                <th>rayon_id</th>
                                <th>pjruangan</th>
                                <th>panjang ruangan</th>
                                <th>lebar ruangan</th>
                                <th>luas ruangan</th>
                                <th>Status Tanah</th>
                                <th>Luas Tanah</th>
                                <th>Kode Tanah</th>
                                <th>No Sertifikat/No seri</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $item)
                            <tr> 
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->klasifikasi->name }}</td>
                                <td>{{ $item->noruang }}</td>
                                <td>{{ $item->nama_ruang }}</td>
                                <td>{{ $item->rayon->name }}</td>
                                <td>{{ $item->pjruangan }}</td>
                                <td>{{ $item->panjang }}</td>
                                <td>{{ $item->lebar }}</td>
                                <td>{{ $item->luas }}</td>
                                <td>{{ $item->tanah->status_tanah }}</td>
                                <td>{{ $item->tanah->luas }}</td>
                                <td>{{ $item->tanah->kode_tanah }}</td>
                                <td>{{ $item->tanah->no_sertifikat }}</td>
                                <td>
                                    <a href="{{url('/ruangan/edit', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                                    <a href="{{url('/ruangan/delete', $item->id)}}" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger">Delete</a>
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
