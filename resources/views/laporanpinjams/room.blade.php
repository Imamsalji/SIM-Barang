<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Gedung dan Bangunan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
    <center>
        <strong>Kartu Inventaris Barang (KIB) C</strong> 
    </center>
    <center>
        <strong>Gedung dan Bangunan</strong> 
    </center>
    <h6>Provinsi         :</h6>
    <h6>Kab/Bogor :</h6>
    <h6>Kecamatan :</h6>
    <h6>Bidang :</h6>
    <h6>Unit Organisasi :</h6>
    <h6>Submit Organisasi :</h6>
    <h6>UPB / Sekolah :</h6>
    <h6>No. Kode Lokasi :</h6>
    <table class="table table-sm text-center" border="2">
        <thead style="vertical-align: middle">
            <tr >
                <th rowspan="3" class="align-middle">No</th>
                <th rowspan="3" class="align-middle">Nama Barang</th>
                <th colspan="2" class="align-middle">Nomor</th>
                <th rowspan="1" class="align-middle">kondisi bangunan</th>
                <th colspan="2" class="align-middle">kontruksi bangunan</th>
                <th class="align-middle">Luas</th>
                <th class="align-middle">Lebar</th>
                <th class="align-middle">luas</th>
                <th class="align-middle"> </th>
                <th class="align-middle">nomor</th>
                <th rowspan="3" class="align-middle">asal usul</th>
                <th rowspan="3" class="align-middle">harga</th>
                <th colspan="2" class="align-middle">keterangan </th>
              </tr>
              <tr>
                <th rowspan="2">kode</th>
                <th rowspan="2">regis</th>
                <th rowspan="2">(B, KB, RB)</th>
                <th rowspan="2">bertingkat</th>
                <th rowspan="2">beton</th>
                <th rowspan="2">lokasi (M2)</th>
                <th rowspan="2">lokasi alamat</th>
                <th rowspan="2">Tanah (M2)</th>
                <th rowspan="2">Status Tanah</th>
                <th rowspan="2">Kode Tanah</th>
                <th rowspan="2">sumber dana</th>
                <th rowspan="2"></th>
              </tr>
              <tr>
                  
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
                    <td></td>
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