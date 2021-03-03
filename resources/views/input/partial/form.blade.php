<div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('name') class="text-danger" 
                        @enderror>Nama Barang @error('name')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="name" type="text" name="name" value="{{ old('name') ?? $input->name }}" class="form-control">
                      </div>
                    </div>
                    

                    <input id="jenis_masuk" type="hidden" name="jenis_masuk" value="pemberian" class="form-control">


                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_pemberi') class="text-danger" 
                        @enderror>nama_pemberi @error('nama_pemberi')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_pemberi" type="text" name="nama_pemberi" value="{{ old('nama_pemberi') ?? $input->nama_pemberi }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tgl_faktur') class="text-danger" 
                        @enderror>tgl_faktur @error('kondisi_rusak')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="tgl_faktur" type="date" name="tgl_faktur" value="{{ old('tgl_faktur') ?? $input->tgl_faktur}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nofaktur') class="text-danger" 
                        @enderror>nofaktur @error('nofaktur')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nofaktur" type="text" name="nofaktur" value="{{ old('nofaktur') ?? $input->nofaktur}}" class="form-control">
                      </div>
                    </div>

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('input') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>