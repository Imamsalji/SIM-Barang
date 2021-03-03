@extends('layouts.master')
@section('title', 'Pengeditan')
@section('pagetitle')
    <h1>Edit barang yang salah pemasukan</h1>
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
                
                 <form action="{{ route('inputupdate',$input->id) }}" method="POST">
                   @csrf
                   @include('input.partial.form')
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush


