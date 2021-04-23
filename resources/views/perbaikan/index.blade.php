@extends('layouts.master')
@section('title', 'Data Perbaikan')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Data Perbaikan</h1>
@endsection
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ url('perbaikan/create') }}" class="btn btn-outline-primary"><i class="far fa-edit"></i>Tambah Data</a>
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
                            <th>Nama Pelapor</th>
                            <th>Bukti</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($perbaikan as $g)
                            <tr> 
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$g->nama}}</td>
                                <td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
                                <td>{{$g->ket}}</td>
                                <td>
                                <a href="{{route('delete_perbaikan', $g->id)}}" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger">Hapus</a>
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



