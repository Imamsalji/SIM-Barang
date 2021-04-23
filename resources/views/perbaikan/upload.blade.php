@extends('layouts.master')
@section('title', 'Tambah Perbaikan')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Create Perbaikan</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
			  	 	@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }} <br/>
							@endforeach
						</div>
					@endif
                 <form action="/perbaikan/store" enctype="multipart/form-data"method="POST">
                   @csrf
                  <div class="row">
				  	
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama') class="text-danger" 
                        @enderror>Nama Pelapor @error('nama')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama" type="text" name="nama" value="{{ old('nama') }}" class="form-control">
                      </div>
                    </div>

					          <div class="col-md-6">
                      <div class="form-group">
                        <label @error('file') class="text-danger" 
                        @enderror>Bukti @error('file')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="file" type="file" name="file" class="form-control">
                      </div>
                    </div>

					<div class="col-md-6">
                      <div class="form-group">
                        <label @error('ket') class="text-danger" 
                        @enderror>Keterangan @error('ket')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="ket" type="textarea" name="ket" value="{{ old('ket') }}" class="form-control">
                      </div>
                    </div>



                   
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <!--<a href="{{ route('pinjam') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>-->
                  </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection


