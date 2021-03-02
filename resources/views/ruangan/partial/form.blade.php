<div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('klasifikasi_id') class="text-danger" 
                        @enderror>Klasifikasi @error('klasifikasi_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="klasifikasi_id" id="klasifikasi_id">
                          <option value disable>Pilih  Klasifikasi Ruang</option>
                          @foreach ($klasifikasis as $item)
                          <option value="{{ $item->id }}">{{ $item->name }} -> {{ $item->klasifikasi }}</option>
                          @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('rayon_id') class="text-danger" 
                        @enderror>rayon @error('rayon_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="rayon_id" id="rayon_id">
                          <option value disable>Pilih rayon</option>
                          @foreach ($rayons as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('noruang') class="text-danger" 
                        @enderror>No Ruangan @error('noruang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="noruang" type="text" name="noruang" value="{{ old('noruang') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_ruang') class="text-danger" 
                        @enderror>Nama Ruangan @error('nama_ruang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_ruang" type="text" name="nama_ruang" value="{{ old('nama_ruang') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('pjruangan') class="text-danger" 
                        @enderror>Penanggung Jawab Ruangan @error('pjruangan')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="pjruangan" type="text" name="pjruangan" value="{{ old('pjruangan') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('panjang') class="text-danger" 
                        @enderror>panjang @error('panjang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="panjang" type="number" name="panjang" value="{{ old('panjang') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('lebar') class="text-danger" 
                        @enderror>lebar @error('lebar')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="lebar" type="number" name="lebar" value="{{ old('lebar') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('luas') class="text-danger" 
                        @enderror>luas @error('luas')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="luas" type="number" name="luas" value="{{ old('luas') }}" class="form-control">
                      </div>
                    </div>

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">{{ $submit ?? 'Update' }}</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('user') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>