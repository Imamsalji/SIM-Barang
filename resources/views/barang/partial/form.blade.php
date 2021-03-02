<div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kode_barang') class="text-danger" 
                        @enderror>kode_barang @error('kode_barang')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="email" type="text" name="kode_barang" value="{{ old('kode_barang') ?? $barang->kode_barang }}" class="form-control">
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
                          <option value disable>Pilih  kategori</option>
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
                        <input id="nama_barang" type="text" name="nama_barang" value="{{ old('nama_barang') ?? $barang->nama_barang }}" class="form-control">
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
                          <option value disable>Pilih  satuan_id</option>
                          @foreach ($satuan as $item)
                          <option value="{{ $item->id }}">{{ $item->name }} -> {{ $item->jumlah }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kondisi_baik') class="text-danger" 
                        @enderror>kondisi_baik @error('kondisi_baik')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="kondisi_baik" type="number" name="kondisi_baik" value="{{ old('kondisi_baik') ?? $barang->kondisi_baik }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kondisi_rusak') class="text-danger" 
                        @enderror>kondisi_rusak @error('kondisi_rusak')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="kondisi_rusak" type="number" name="kondisi_rusak" value="{{ old('kondisi_rusak') ?? $barang->kondisi_rusak}}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('total') class="text-danger" 
                        @enderror>total @error('total')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="total" type="number" name="total" value="{{ old('total') ?? $barang->total}}" class="form-control">
                      </div>
                    </div>

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                      <a href="{{ route('user') }}" class="btn btn-icon icon-left btn-primary">Cancel</a>
                  </div>