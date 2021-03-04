@extends('layouts.master')
@section('title', 'Klasifikasi')
@section('pagetitle')
    <h1>Tambah Klasifikasi</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('klasifikasisave') }}" method="POST">
                   @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label @error('name') class="text-danger" 
                                @enderror>Masukan nama Klasifikasi @error('name')
                                    {{ $message }}
                                @enderror
                                </label>
                                <input id="email" type="name" name="name" value="{{ old('name') }}" class="form-control">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label @error('klasifikasi') class="text-danger" 
                                @enderror>Masukan Klasifikasi @error('klasifikasi')
                                    {{ $message }}
                                @enderror
                                </label>
                                <input id="emaklasifikasiil" type="text" name="klasifikasi" value="{{ old('klasifikasi') }}" class="form-control">
                                
                            </div>
                        </div>
                        <button class="btn btn-primary ml-3" type="submit"> Submit</button>
                    </div>
                      
                 </form>
            </div>
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
                                <th>name</th>
                                <th>klasifikasi</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($klasifikasis as $item)
                            <tr> 
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->klasifikasi }}</td>
                                <td>
                                <a href="{{url('delete_user', $item->id)}}" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger">Delete</a>
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
