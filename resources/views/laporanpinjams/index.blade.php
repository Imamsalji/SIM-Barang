@extends('layouts.master')
@section('title', 'Laporan Peminjaman')
@section('pagetitle')
    <h1>Laporan Pinjaman</h1>
@endsection
@section('content')
    
    <div class="row" class="form-control">
        <div class="col-lg-12 margin-tb">
                <form action="/laporanpinjam/cari" method="GET">
                    @csrf
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <p>Tanggal Awal</p>
                            <input type="date" ¬ss="form-control @error('startDate') is-invalid @enderror mb-3" name="startDate" id="startDate">
                            @error('starDate')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                    </div>
                        <div class="col-auto">
                            <label class="col-sm-2 mb-3"><b>-</b></label>
                        </div>
                        <div class="col-auto">
                            <p>Tanggal Akhir</p>
                            <input type="date" class="form-contorl @error('endDate')is-invalid @enderror mb-3" name="endDate" id="endDate">
                            @error('endDate')
                            <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="col-auto">
                        <br>
                        <br>
                            <button type="submit" class="btn btn-primary mb-3">Cari</button>
                            @php if(isset($startDate) && isset($endDate)){ @endphp
                            <a href="{{ route('laporanpinjamprint', ['startDate' => $startDate, 'endDate' => $endDate]) }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                            @php }else{ @endphp
                            <a href="{{ route('laporanpinjamprint') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                            @php } @endphp
                        </div>

                </form>
        </div>
    </div>
    <table class="table" id="table">
        <tr>
        
            <th>No</th>
            <th>Penanggung Jawab</th>
            <th>Ruang</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
            <th>Tanggal Pinjam</th>
          
        </tr>
        @foreach ($laporanpinjams as $pinjam)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pinjam-> pj}}</td>
            <td>{{ $pinjam-> ruang}}</td>
            <td>{{ $pinjam-> barang->nama_barang}}</td>
            <td>{{ $pinjam-> jumlah}}</td>
            <td>{{ $pinjam-> kondisi}}</td>  
            <td>{{ $pinjam-> created_at}}</td>            
          
        </tr>
        @endforeach
   	</table>
     	
   </section>
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