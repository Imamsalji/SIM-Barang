@extends('layouts.master')
@section('title', 'Tambah Barang')
@section('pagetitle')
    <h1>Input Barang</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
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
                @endif
                
                 <form action="{{ route('ruangansave') }}" method="POST">
                   @csrf
                   @include('ruangan.partial.form',['submit' => 'Tambah'])
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush


