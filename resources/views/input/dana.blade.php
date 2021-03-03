@extends('layouts.master')
@section('title', 'Sumber Dana')
@section('pagetitle')
    <h1>Sumber Dana</h1>
@endsection
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('danasave') }}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('pemberi') class="text-danger" 
                        @enderror>Masukan Sumber Dana @error('name')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="pemberi" type="name" name="pemberi" value="{{ old('pemberi') }}" class="form-control">
                        
                      </div>
                        <button class="btn btn-primary " type="submit">Submit</button>
                    </div>

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
                                <th>Pemberi</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($danas as $item)
                            <tr> 
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->pemberi }}</td>
                                <td>
                                <a href="{{url('delete_dana', $item->id)}}" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger">Delete</a>
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
