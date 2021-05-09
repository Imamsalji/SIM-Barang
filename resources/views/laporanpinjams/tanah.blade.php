<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print data peserta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
    <center>
        <strong>Kartu Inventaris Barang (KIB) A</strong> 
    </center>
    <center class="mb-3">
        <strong>Tanah</strong> 
    </center>
    <h6>Provinsi         :</h6>
    <h6>Kab/Bogor :</h6>
    <h6>Kecamatan :</h6>
    <h6>Bidang :</h6>
    <h6>Unit Organisasi :</h6>
    <h6>Submit Organisasi :</h6>
    <h6>UPB / Sekolah :</h6>
    <h6>No. Kode Lokasi :</h6>
    <table class="table table-sm text-center" border="2" >
        <thead style="vertical-align: middle">
            <tr >
                <th rowspan="3" class="align-middle">no</th>
                <th rowspan="3" class="align-middle">Nama Barang</th>
                <th colspan="2" class="align-middle">Nomor</th>
                <th rowspan="3" class="align-middle">luas</th>
                <th rowspan="3" class="align-middle">thn peng daan</th>
                <th rowspan="3" class="align-middle">letak/ alamat</th>
                <th colspan="3" class="align-middle">status tanah</th>
                <th rowspan="3" class="align-middle">penggunaan</th>
                <th rowspan="3" class="align-middle">asal usul</th>
                <th rowspan="3" class="align-middle">harga</th>
                <th rowspan="3" class="align-middle">ket</th>
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
                  <td>{{ $loop->iteration  }}</td>
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
                  <td>14</td>
              </tr>
              @endforeach
              @foreach ($pinjamans as $item)
                <tr>
                    <td>{{ $loop->iteration  }}</td>
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
                    <td>14</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <p style="text-align:left;">
        mengetahui <br>
        Kepala Sekolah
        
        <span style="float:right;">
            Pengurus Barang
            <br>
            <br>
            <br>
            <br>
            <br>
            ..................................... <br>
        nip .................................
        </span>
        <br>
        <br>
        <br>
        <br>
        <br>
        ..................................... <br>
        nip .................................
    </p>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>