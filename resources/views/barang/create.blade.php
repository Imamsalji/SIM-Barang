@extends('layouts.master')
@section('title', 'Tambah Barang')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Input Barang</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
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
                @endif
                
                 <form action="{{ route('barangsave') }}" method="POST">
                   @csrf
                   @include('barang.partial.form',['submit' => 'Tambah'])
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush


