@extends('layouts.master')
@section('title', 'Data Tanah')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Penginputan Tanah</h1>
@endsection
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('Tanah.create') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Data</a>
           <a href="{{ route('tanah') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>print tanah</a>
           <a href="{{ route('alat') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>print alat</a>
           <a href="{{ route('room') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>print bangunan</a>
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
                            <th>Kode Tanah</th>
                            <th>Register</th>
                            <th>luas</th>
                            <th>Tahun Pengadaan</th>
                            <th>status tanah</th>
                            <th>Nomor Sertifikat</th>
                            <th>tanggal setifikat</th>
                            <th>penggunaan</th>
                            <th>asal-usul</th>
                            <th>Harga</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tanahs as $pinjam)
                            <tr> 
                                <td>{{ $loop->iteration }}</td>
                                @if ($rowCount > 0)
                                @if ($pinjam->id < 9)
                                <td>T0000{{ $pinjam->id }}</td>
                                @elseif ($pinjam->id < 99)
                                <td>T000{{ $pinjam->id  }}</td>
                                @elseif ($pinjam->id < 999)
                                <td>T00{{ $pinjam->id }}</td>
                                @elseif ($pinjam->id < 9999)
                                <td>T0{{ $pinjam->id }}</td>
                                @else
                                <td>{{ $pinjam->id  }}</td>
                                @endif
                                @endif
                                <td>{{ $pinjam->register}}</td>
                                <td>{{ $pinjam->luas}}</td>
                                <td>{{ $pinjam->thn_pengadaan}}</td>
                                <td>{{ $pinjam->status_tanah}}</td>
                                <td>{{ $pinjam->no_sertifikat}}</td>
                                <td>{{ $pinjam->tgl_sertifikat}}</td>
                                <td>{{ $pinjam->penggunaan}}</td>
                                <td>{{ $pinjam->asal_usul}}</td>
                                <td>{{ $pinjam->harga}}</td>
                                <td>
                                    <a href="{{route('Tanah.edit', $pinjam->id)}}" class="btn btn-outline-warning">Edit</a>
                                    <form action="{{ route('Tanah.destroy',$pinjam->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin hapus data?')">Delete</button>
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
