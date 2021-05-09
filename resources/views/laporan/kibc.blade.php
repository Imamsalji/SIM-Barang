@extends('layouts.master')
@section('title', 'Laporan and Barcode')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Laporan Kartu Inventaris Barang (KIB) C </h1>
@endsection
@section('content')

<div class="card">
    <a href="{{ route('room') }}" class="btn btn-outline-primary"><h6 class="mt-2">Print Kartu Inventaris Barang (KIB) C Gedung Dan Bangunan </h6></a>
</div>


<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                    <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered table-md text-center">
                        <thead style="vertical-align: middle">
                            <tr >
                                <th rowspan="2" class="align-middle">No</th>
                                <th rowspan="2" class="align-middle">Nama Barang</th>
                                <th colspan="2" class="align-middle">Nomor</th>
                                <th  class="align-middle">kondisi bangunan</th>
                                <th colspan="2" class="align-middle">kontruksi bangunan</th>
                                <th class="align-middle">Luas</th>
                                <th class="align-middle">Lebar</th>
                                <th class="align-middle">luas</th>
                                <th class="align-middle"> </th>
                                <th class="align-middle">nomor</th>
                                <th rowspan="2" class="align-middle">asal usul</th>
                                <th rowspan="2" class="align-middle">harga</th>
                                <th colspan="2" class="align-middle">keterangan </th>
                              </tr>
                              <tr>
                                <th >kode</th>
                                <th >regis</th>
                                <th >(B, KB, RB)</th>
                                <th>bertingkat</th>
                                <th>beton</th>
                                <th>lokasi (M2)</th>
                                <th >lokasi alamat</th>
                                <th>Tanah (M2)</th>
                                <th >Status Tanah</th>
                                <th >Kode Tanah</th>
                                <th >sumber dana</th>
                                <th ></th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($pinjams as $item)
                              <tr>
                                  <td>{{ $loop->iteration  }}</td>
                                  <td>{{ $item->barangs->nama_barang  }}</td>
                                  @if ($rowCount > 0)
                                    @if ($item->rooms->id < 9)
                                    <td>R0000{{ $item->rooms->id }}</td>
                                    @elseif ($item->rooms->id < 99)
                                    <td>R000{{ $item->rooms->id  }}</td>
                                    @elseif ($item->rooms->id < 999)
                                    <td>R00{{ $item->rooms->id }}</td>
                                    @elseif ($item->rooms->id < 9999)
                                    <td>R0{{ $item->rooms->id }}</td>
                                     @else
                                    <td>{{ $item->rooms->id  }}</td>
                                    @endif
                                    @endif
                                    <td>{{ $item->rooms->regis  }}</td>
                                    <td>{{ $item->rooms->kondisi_bangunan  }}</td>
                                    <td>{{ $item->rooms->bertingkat  }}</td>
                                    <td>{{ $item->rooms->beton  }}</td>
                                    <td>{{ $item->rooms->luas  }}</td>
                                    <td>{{ $item->rooms->lebar  }}</td>
                                    <td>{{ $item->rooms->tanah->luas  }}</td>
                                    <td>{{ $item->rooms->tanah->status_tanah  }}</td>
                                    <td>T0000{{ $item->rooms->tanah->id  }}</td>
                                    <td>{{ $item->rooms->tanah->asal_usul   }}</td>
                                    <td>{{ $item->rooms->tanah->harga   }}</td>
                                    <td>{{ $item->rooms->dana->pemberi   }}</td>
                                    <td>{!! QrCode::size(100)->generate( $item->rooms  ); !!}</td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
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
