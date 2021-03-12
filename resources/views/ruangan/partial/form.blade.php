<div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('klasifikasi_id') class="text-danger" 
                        @enderror>Klasifikasi @error('klasifikasi_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="klasifikasi_id" id="klasifikasi_id">
                          <option value="{{ request()->is('create_ruangan') ? '' : $room->klasifikasi->id  }}">{{ request()->is('create_ruangan') ? 'Pilih  Klasifikasi Ruang' : $room->klasifikasi->name  }}</option>
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
                          <option value="{{ request()->is('create_ruangan') ? '' : $room->rayon->id  }}">{{ request()->is('create_ruangan') ? 'Pilih rayon' : $room->rayon->name  }}</option>
                          @foreach ($rayons as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tanah_id') class="text-danger" 
                        @enderror>Tanah @error('tanah_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="tanah_id" id="tanah_id">
                          <option value="{{ request()->is('create_ruangan') ? '' : $room->tanah->id  }}">{{ request()->is('create_ruangan') ? 'Pilih Kode Tanah' : $room->tanah->kode_tanah }}</option>
                          @foreach ($tanah as $item)
                          <option value="{{ $item->id }}">{{ $item->kode_tanah }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('dana_id') class="text-danger" 
                        @enderror>dana_id @error('dana_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="dana_id" id="dana_id">
                          <option value="{{ request()->is('create_ruangan') ? '' : $room->dana->id  }}">{{ request()->is('create_ruangan') ? 'Pilih sumber dana' : $room->dana->pemberi }}</option>
                          @foreach ($dana as $item)
                          <option value="{{ $item->id }}">{{ $item->pemberi }}</option>
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
                        <input id="noruang" type="text" name="noruang" value="{{ old('noruang') ?? $room->noruang}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_ruang') class="text-danger" 
                        @enderror>Nama Ruangan @error('nama_ruang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_ruang" type="text" name="nama_ruang" value="{{ old('nama_ruang') ?? $room->nama_ruang}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('pjruangan') class="text-danger" 
                        @enderror>Penanggung Jawab Ruangan @error('pjruangan')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="pjruangan" type="text" name="pjruangan" value="{{ old('pjruangan') ?? $room->pjruangan}}" class="form-control">
                      </div>
                    </div>

                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('regis') class="text-danger" 
                        @enderror>registrasi @error('regis')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="regis" type="text" name="regis" value="{{ old('regis') ?? $room->regis}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('lebar') class="text-danger" 
                        @enderror>lebar @error('lebar')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="lebar" type="number" name="lebar" value="{{ old('lebar') ?? $room->lebar}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('panjang') class="text-danger" 
                        @enderror>panjang @error('panjang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="panjang" type="number" name="panjang" value="{{ old('panjang') ?? $room->panjang}}" class="form-control">
                      </div>
                    </div>


                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kondisi_bangunan') class="text-danger" 
                        @enderror>kondisi_bangunan @error('kondisi_bangunan')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="kondisi_bangunan" type="text" name="kondisi_bangunan" value="{{ old('kondisi_bangunan') ?? $room->kondisi_bangunan}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('bertingkat') class="text-danger" 
                        @enderror>bertingkat @error('bertingkat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="bertingkat" type="text" name="bertingkat" value="{{ old('bertingkat') ?? $room->bertingkat}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('beton') class="text-danger" 
                        @enderror>beton @error('beton')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="beton" type="text" name="beton" value="{{ old('beton') ?? $room->beton}}" class="form-control">
                      </div>
                    </div>

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">{{ $submit ?? 'Update' }}</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('ruangan') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>