<div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kode_barang') class="text-danger" 
                        @enderror>kode_barang @error('kode_barang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="email" type="text" name="kode_barang" value="{{ old('kode_barang') ?? $habis->kode_barang }}" class="form-control">
                      </div>
                    </div>
                    

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kategori_id') class="text-danger" 
                        @enderror>kategori @error('kategori_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="kategori_id" id="kategori_id">
                          <option value="{{ request()->is('habis/create') ? '' : $habis->kategori->id }}">{{ request()->is('habis/create') ? 'Pilih Kategori' : $habis->kategori->name }}</option>
                          @foreach ($kategori as $item)
                          <option value="{{ $item->id  }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_barang') class="text-danger" 
                        @enderror>nama_barang @error('nama_barang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_barang" type="text" name="nama_barang" value="{{ old('nama_barang') ?? $habis->nama_barang }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('satuan_id') class="text-danger" 
                        @enderror>satuan @error('satuan_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="satuan_id" id="satuan_id">
                          <option value="{{ request()->is('habis/create') ? '' : $habis->satuan->id }}">{{ request()->is('habis/create') ? 'Pilih Satuan' : $habis->satuan->name }}</option>
                          @foreach ($satuan as $item)
                          <option value="{{ $item->id }}">{{ $item->name }} -> {{ $item->jumlah }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <!--  

                      dari sini

                    -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('toko_id') class="text-danger" 
                        @enderror>Toko @error('toko_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="toko_id" id="toko_id">
                          <option value="{{ request()->is('habis/create') ? '' : $habis->toko->id }}">{{ request()->is('habis/create') ? 'Pilih Toko' : $habis->toko->name }}</option>
                          @foreach ($toko as $item)
                          <option value="{{ $item->id }}">{{ $item->name }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('dana_id') class="text-danger" 
                        @enderror>Sumber dana @error('dana_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="dana_id" id="dana_id">
                          <option value="{{ request()->is('habis/create') ? '' : $habis->dana->id }}">{{ request()->is('habis/create') ? 'Pilih Sumber dana' : $habis->dana->pemberi }}</option>
                          @foreach ($dana as $item)
                          <option value="{{ $item->id }}">{{ $item->pemberi }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('room_id') class="text-danger" 
                        @enderror>Bangunan serta Ruangan @error('room_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="room_id" id="room_id">
                          <option value="{{ request()->is('habis/create') ? '' : $habis->room->id }}">{{ request()->is('habis/create') ? 'Pilih Nama Ruangan' : $habis->room->nama_ruang }}</option>
                          @foreach ($room as $item)
                          <option value="{{ $item->id }}">{{ $item->nama_ruang }} - {{ $item->noruang }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('spek') class="text-danger" 
                        @enderror>spek @error('spek')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="spek" type="text" name="spek" value="{{ old('spek') ?? $habis->spek }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('merk') class="text-danger" 
                        @enderror>merk @error('merk')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="merk" type="text" name="merk" value="{{ old('merk') ?? $habis->merk }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('no_seri') class="text-danger" 
                        @enderror>no_seri @error('no_seri')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="no_seri" type="text" name="no_seri" value="{{ old('no_seri') ?? $habis->no_seri }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tgl_masuk') class="text-danger" 
                        @enderror>tgl_masuk @error('tgl_masuk')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="tgl_masuk" type="date" name="tgl_masuk" value="{{ old('tgl_masuk') ?? $habis->tgl_masuk }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('no_faktur') class="text-danger" 
                        @enderror>nofaktur @error('spek')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="no_faktur" type="text" name="no_faktur" value="{{ old('no_faktur') ?? $habis->no_faktur }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('harga') class="text-danger" 
                        @enderror>harga @error('harga')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="harga" type="text" name="harga" value="{{ old('harga') ?? $habis->harga }}" class="form-control">
                      </div>
                    </div>
                    

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('barang') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>