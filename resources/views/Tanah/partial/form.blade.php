<div class="card-body">

      <div class="form-group">
          <label for="kode_tanah">kode tanah</label>
          <input type="text" name="kode_tanah" id="kode_tanah" class="form-control"
              value="{{ old('kode_tanah') ?? $tanah->kode_tanah}}">
      </div>
      @error('kode_tanah')
          <span class=" text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="register">register</label>
          <input type="text" name="register" id="register" class="form-control"
              value="{{ old('register') ?? $tanah->register}}">
      </div>
      @error('register')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="luas">Luas</label>
          <input type="number" name="luas" id="luas" class="form-control"
              value="{{ old('luas') ?? $tanah->luas }}">
      </div>
      @error('luas')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="thn_pengadaan">tahun pengadaan</label>
          <input type="text" name="thn_pengadaan" id="thn_pengadaan" class="form-control"
              value="{{ old('thn_pengadaan') ?? $tanah->thn_pengadaan }}">
      </div>
      @error('thn_pengadaan')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="status_tanah">Status Tanah</label>
          <input type="text" name="status_tanah" id="status_tanah" class="form-control"
              value="{{ old('status_tanah') ?? $tanah->status_tanah }}">
      </div>
      @error('status_tanah')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="no_sertifikat">no_sertifikat</label>
          <input type="number" name="no_sertifikat" id="no_sertifikat" class="form-control"
              value="{{ old('no_sertifikat') ?? $tanah->no_sertifikat }}">
      </div>
      @error('no_sertifikat')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="tgl_sertifikat">tgl_sertifikat</label>
          <input type="date" name="tgl_sertifikat" id="tgl_sertifikat" class="form-control"
              value="{{ old('tgl_sertifikat') ?? $tanah->tgl_sertifikat }}">
      </div>
      @error('tgl_sertifikat')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="penggunaan">penggunaan</label>
          <input type="text" name="penggunaan" id="penggunaan" class="form-control"
              value="{{ old('penggunaan') ?? $tanah->penggunaan }}">
      </div>
      @error('penggunaan')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="asal_usul">asal_usul</label>
          <input type="text" name="asal_usul" id="asal_usul" class="form-control"
              value="{{ old('asal_usul') ?? $tanah->asal_usul }}">
      </div>
      @error('asal_usul')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="form-group">
          <label for="harga">harga</label>
          <input type="text" name="harga" id="harga" class="form-control"
              value="{{ old('harga') ?? $tanah->harga }}">
      </div>
      @error('harga')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror



  </div>
  <div class="card-footer">
      <a href="{{ route('Tanah.index') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
      <button type="submit" class="btn btn-success">{{ $submit ?? 'Update' }}</button>
  </div>
