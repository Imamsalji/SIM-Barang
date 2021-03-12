<div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('name') class="text-danger" 
                        @enderror>Nama Barang @error('name')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="name" id="name">
                          <option value disable>{{ request()->is('input/create/pembelian') ? 'Pilih Barang' : $input->toko->name }}</option>
                          @foreach ($barang as $item)
                          <option value="{{ $item->id }}">{{ $item->nama_barang }} </option>
                          @endforeach
                        </select>
                        <br>
                        <a href="{{ route('create_barang') }}" class="btn btn-icon icon-left btn-primary">Klik Disini apabila barang tidak ada di list</a>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('tgl_faktur') class="text-danger" 
                        @enderror>Tanggal Masuk barang @error('kondisi_rusak')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="tgl_faktur" type="date" name="tgl_faktur" value="{{ old('tgl_faktur') ?? $input->tgl_faktur}}" class="form-control">
                      </div>
                    </div>

                    
                    
                        <input id="jenis_masuk" type="hidden" name="jenis_masuk" value="pembelian" class="form-control">
                

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('toko_id') class="text-danger" 
                        @enderror>toko_id @error('toko_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="toko_id" id="toko_id">
                          <option value disable>{{ request()->is('input/create/pembelian') ? 'Pilih Toko' : $input->toko->name }}</option>
                          @foreach ($toko as $item)
                          <option value="{{ $item->id }}">{{ $item->name }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <input type="hidden" name="nama_pemberi" value="" class="form-control">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('dana_id') class="text-danger" 
                        @enderror>Sumber Dana @error('dana_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="dana_id" id="dana_id">
                          <option value disable>{{ request()->is('input/create/pembelian') ? 'Pilih Sumber Dana' : $input->dana->pemberi }}</option>
                          @foreach ($dana as $item)
                          <option value="{{ $item->id  }}">{{ $item->pemberi }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('jumlah') class="text-danger" 
                        @enderror>jumlah @error('kondisi_rusak')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="jumlah" type="number" name="jumlah" value="{{ old('jumlah') ?? $input->jumlah}}" class="form-control">
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