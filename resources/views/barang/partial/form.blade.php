<div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kode_barang') class="text-danger" 
                        @enderror>Kode Barang @error('kode_barang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="email" type="text" name="kode_barang" value="{{ old('kode_barang') ?? $barang->kode_barang }}" class="form-control">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kategori_id') class="text-danger" 
                        @enderror>Kategori @error('kategori_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="kategori_id" id="kategori_id">
                          <option value="{{ request()->is('create_barang') ? '' : $barang->kategori->id }}">{{ request()->is('create_barang') ? 'Pilih Kategori' : $barang->kategori->name }}</option>
                          @foreach ($kategori as $item)
                          <option value="{{ $item->id  }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_barang') class="text-danger" 
                        @enderror>Nama Barang @error('nama_barang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_barang" type="text" name="nama_barang" value="{{ old('nama_barang') ?? $barang->nama_barang }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('satuan_id') class="text-danger" 
                        @enderror>Satuan @error('satuan_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="satuan_id" id="satuan_id">
                          <option value="{{ request()->is('create_barang') ? '' : $barang->satuan->id }}">{{ request()->is('create_barang') ? 'Pilih Satuan' : $barang->satuan->name }}</option>
                          @foreach ($satuan as $item)
                          <option value="{{ $item->id }}">{{ $item->name }} -> {{ $item->jumlah }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('merk') class="text-danger" 
                        @enderror>Merk @error('merk')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="merk" type="text" name="merk" value="{{ old('merk') ?? $barang->merk }}" class="form-control">
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
                          <option value="{{ request()->is('create_barang') ? '' : $barang->toko->id }}">{{ request()->is('create_barang') ? 'Pilih Toko' : $barang->toko->name }}</option>
                          @foreach ($toko as $item)
                          <option value="{{ $item->id }}">{{ $item->name }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('spek') class="text-danger" 
                        @enderror>Spesifikasi @error('spek')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="spek" type="text" name="spek" value="{{ old('spek') ?? $barang->spek }}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('dana_id') class="text-danger" 
                        @enderror>Sumber Dana @error('dana_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="dana_id" id="dana_id">
                          <option value="{{ request()->is('create_barang') ? '' : $barang->dana->id }}">{{ request()->is('create_barang') ? 'Pilih Sumber dana' : $barang->dana->pemberi }}</option>
                          @foreach ($dana as $item)
                          <option value="{{ $item->id }}">{{ $item->pemberi }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('no_seri') class="text-danger" 
                        @enderror>No Seri @error('no_seri')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="no_seri" type="text" name="no_seri" value="{{ old('no_seri') ?? $barang->no_seri }}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('room_id') class="text-danger" 
                        @enderror>Ruang @error('room_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="room_id" id="room_id">
                          <option value="{{ request()->is('create_barang') ? '' : $barang->room->id }}">{{ request()->is('create_barang') ? 'Pilih Ruangan' : $barang->room->nama_ruang }}</option>
                          @foreach ($room as $item)
                          <option value="{{ $item->id }}">{{ $item->nama_ruang }} - {{ $item->noruang }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('no_faktur') class="text-danger" 
                        @enderror>No Faktur @error('spek')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="no_faktur" type="text" name="no_faktur" value="{{ old('no_faktur') ?? $barang->no_faktur }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tgl_masuk') class="text-danger" 
                        @enderror>Tanggal Masuk @error('tgl_masuk')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="tgl_masuk" type="date" name="tgl_masuk" value="{{ old('tgl_masuk') ?? $barang->tgl_masuk }}" class="form-control">
                      </div>
                    </div>

                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('harga') class="text-danger" 
                        @enderror>Harga @error('harga')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="harga" type="text" name="harga" value="{{ old('harga') ?? $barang->harga }}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('total') class="text-danger" 
                        @enderror>Total Barang @error('total')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="total" type="text" name="total" value="{{ old('total') ?? $barang->total }}" class="form-control">
                      </div>
                    </div>
                    

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('barang') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>