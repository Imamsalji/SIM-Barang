@extends('layouts.master')
@section('title', 'Edit User')
@section('pagetitle')
    <h1>Edit Ruangan </h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('ruanganupdate', $room->id) }}" method="POST">
                   @csrf
                   @method('POST')
                   @include('ruangan.partial.form')
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush
