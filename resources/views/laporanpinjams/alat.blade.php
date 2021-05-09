<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Peralatan dan mesin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
    <center>
        <strong>Kartu Inventaris Barang (KIB) B</strong> 
    </center>
    <center class="mb-3">
        <strong>Peralatan Dan Mesin</strong> 
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
              <tr>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                  <th>8</th>
                  <th>9</th>
                  <th>10</th>
                  <th>11</th>
                  <th>12</th>
                  <th>13</th>
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
                <td></td>
                
                <td>{!! QrCode::size(100)->generate('imam'); !!}</td>
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
                <td>{!! QrCode::size(100)->generate('imam'); !!}</td>
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