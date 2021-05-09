@extends('layouts.master')
@section('title', 'Laporan and Barcode')
@section('pagetitle')
    <img alt="image" src="{{ asset('../assets/img/logo-wk.png') }}" class="rounded-circle mr-1" style="width: 50px">
    <h1>Laporan Kartu Inventaris Barang (KIB) B </h1>
@endsection
@section('content')

<div class="card">
    <a href="{{ route('alat') }}" class="btn btn-outline-primary"><h6 class="mt-2">Print Kartu Inventaris Barang (KIB) B Peralatan Dan Mesin </h6></a>
</div>


<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                    <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered table-md">
                        <thead style="vertical-align: middle">
                            <tr >
                                <th rowspan="3" class="align-middle">Nama Barang</th>
                                <th rowspan="3" class="align-middle">Regis</th>
                                <th rowspan="3" class="align-middle">merek / tipe</th>
                                <th rowspan="3" class="align-middle">Spek</th>
                                <th rowspan="3" class="align-middle">thn beli</th>
                                <th colspan="3" class="align-middle">nomor</th>
                                <th rowspan="3" class="align-middle">asal usul</th>
                                <th rowspan="3" class="align-middle">harga</th>
                                <th rowspan="3" class="align-middle">dana</th>
                                <th class="align-middle"> </th>
                                <th rowspan="3" class="align-middle"> ket </th>
                              </tr>
                              <tr>
                                <th rowspan="2">Faktur</th>
                                <th rowspan="2">Mesin</th>
                                <th rowspan="2">Seri</th>
                                <th >kondisi</th>
                              </tr>
                              <tr>
                                <th>Barang</th>
                              </tr>
                              
                        </thead>
                        <tbody>
                            @foreach ($pinjams as $item)
                            <tr>
                                <td>{{ $item->barangs->nama_barang  }}</td>
                                <td>{{ $item->rooms->tanah->register }}</td>
                                <td>{{ $item->barangs->merk }}</td>
                                <td>{{ $item->barangs->spek }}</td>
                                <td>{{ $item->barangs->tgl_masuk }}</td>
                                <td>{{ $item->barangs->no_faktur }}</td>
                                <td>{{ $item->barangs->nofaktur }}</td>
                                <td>{{ $item->barangs->no_seri }}</td>
                                <td>{{ $item->rooms->tanah->asal_usul }}</td>
                                <td>{{ $item->barangs->harga  }}</td>
                                <td>{{ $item->barangs->dana->pemberi  }}</td>
                                <td>
                                </td>
                                  
                                <td>{!! QrCode::size(100)->generate( $item->barangs  ); !!}</td>
                            </tr>
                            @endforeach
                            @foreach ($pinjamans as $item)
                            <tr>
                                <td>{{ $item->habis->nama_barang  }}</td>
                                <td>{{ $item->rooms->tanah->register }}</td>
                                <td>{{ $item->habis->merk }}</td>
                                <td>{{ $item->habis->spek }}</td>
                                <td>{{ $item->habis->tgl_masuk }}</td>
                                <td>{{ $item->habis->no_faktur }}</td>
                                <td>{{ $item->habis->nofaktur }}</td>
                                <td>{{ $item->habis->no_seri }}</td>
                                <td>{{ $item->rooms->tanah->asal_usul }}</td>
                                <td>{{ $item->habis->harga  }}</td>
                                <td>{{ $item->habis->dana->pemberi  }}</td>
                                <td></td>
                                <td>{!! QrCode::size(100)->generate( $item->habis  ); !!}</td>
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
