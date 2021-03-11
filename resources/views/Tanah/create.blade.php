@extends('layouts.master')
@section('title', 'Pemberian Barang')
@section('pagetitle')
    <h1>Penginputan barang Yang di berikan</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        
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
                
                 <form action="{{ route('Tanah.store') }}" method="POST">
                   @csrf
                   @include('Tanah.partial.form',['submit' => 'Tambah'])
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush


