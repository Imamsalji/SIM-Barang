@extends('layouts.master')
@section('title', 'Laporan and Barcode')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Laporan Kartu Inventaris Barang (KIB) A </h1>
@endsection
@section('content')

<div class="card">
    <a href="{{ route('tanah') }}" class="btn btn-outline-primary"><h6 class="mt-2">Print Kartu Inventaris Barang (KIB) A Tanah </h6></a>
</div>


<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                    <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered table-md" >
                        <thead style="vertical-align: middle">
                            <tr >
                                <th rowspan="3" class="align-middle">Nama Barang</th>
                                <th colspan="2" class="align-middle">Nomor</th>
                                <th rowspan="3" class="align-middle">luas</th>
                                <th rowspan="3" class="align-middle">thn peng daan</th>
                                <th rowspan="3" class="align-middle">letak/ alamat</th>
                                <th colspan="3" class="align-middle">status tanah</th>
                                <th rowspan="3" class="align-middle">penggunaan</th>
                                <th rowspan="3" class="align-middle">asal usul</th>
                                <th rowspan="3" class="align-middle">harga</th>
                                <th rowspan="3" class="align-middle">QrCode</th>
                              </tr>
                              <tr>
                                <th rowspan="2">kode barang</th>
                                <th rowspan="2">register</th>
                                <th rowspan="2">Hak</th>
                                <th colspan="2">sertifikat</th>
                              </tr>
                              <tr>
                                <th>Tanggal</th>
                                <th>nomor</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($pinjams as $item)
                              <tr>
                                  <td>{{ $item->barangs->nama_barang  }}</td>
                                  @if ($rowCount > 0)
                                    @if ($item->barangs->id < 9)
                                    <td>BR0000{{ $item->barangs->id }}</td>
                                    @elseif ($item->barangs->id < 99)
                                    <td>BR000{{ $item->barangs->id  }}</td>
                                    @elseif ($item->barangs->id < 999)
                                    <td>BR00{{ $item->barangs->id }}</td>
                                    @elseif ($item->barangs->id < 9999)
                                    <td>BR0{{ $item->barangs->id }}</td>
                                    @else
                                    <td>{{ $item->barangs->id  }}</td>
                                    @endif
                                  @endif
                                  <td>{{ $item->rooms->tanah->register }}</td>
                                  <td>{{ $item->rooms->tanah->luas }}</td>
                                  <td>{{ $item->rooms->tanah->thn_pengadaan }}</td>
                                  <td>7</td>
                                  <td>8</td>
                                  <td>{{ $item->rooms->tanah->tgl_sertifikat }}</td>
                                  <td>{{ $item->rooms->tanah->no_sertifikat }}</td>
                                  <td>{{ $item->rooms->tanah->penggunaan }}</td>
                                  <td>{{ $item->rooms->tanah->asal_usul }}</td>
                                  <td>{{ $item->rooms->tanah->harga }}</td>
                                  <td>
                                        {!! QrCode::size(100)->generate($item->rooms->tanah); !!}
                                      
                                   </td>
                              </tr>
                              @endforeach
                              @foreach ($pinjamans as $item)
                            <tr>
                                <td>{{ $item->habis->nama_barang  }}</td>
                                @if ($row > 0)
                                @if ($item->habis->id < 9)
                                <td>BR0000{{ $item->habis->id }}</td>
                                @elseif ($item->habis->id < 99)
                                <td>BR000{{ $item->habis->id  }}</td>
                                @elseif ($item->habis->id < 999)
                                <td>BR00{{ $item->habis->id }}</td>
                                @elseif ($item->habis->id < 9999)
                                <td>BR0{{ $item->habis->id }}</td>
                                @else
                                <td>{{ $item->habis->id  }}</td>
                                @endif
                                @endif
                                <td>{{ $item->rooms->tanah->register }}</td>
                                <td>{{ $item->rooms->tanah->luas }}</td>
                                <td>{{ $item->rooms->tanah->thn_pengadaan }}</td>
                                <td>7</td>
                                <td>8</td>
                                <td>{{ $item->rooms->tanah->tgl_sertifikat }}</td>
                                <td>{{ $item->rooms->tanah->no_sertifikat }}</td>
                                <td>{{ $item->rooms->tanah->penggunaan }}</td>
                                <td>{{ $item->rooms->tanah->asal_usul }}</td>
                                <td>{{ $item->rooms->tanah->harga }}</td>
                                <td>{!! QrCode::size(100)->generate($item->rooms->tanah); !!}</td>
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
