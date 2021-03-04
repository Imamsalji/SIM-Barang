<!DOCTYPE html>
<html>
<head>
    <title>Laporan Peminjaman</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
p {
  align:justivy;
   padding-top: 20px;
   padding-right: 50px;
   padding-bottom: 800px;
   padding-left: 0px;
}
</style>
</head>
<body onafterprint="redirect()">
    <br>
    @php if(isset($startDate) && isset($endDate)){ @endphp
    <h2 style="margin-left: 1%;">Laporan Peminjaman: @php echo $startDate @endphp sampai @php echo $endDate @endphp</h2>
    @php }else{ @endphp
    <h2><center>Laporan Peminjaman</center></h2>
    @php } @endphp
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
            <th scope="col">NO</th>
            <th scope="col">Penanggung Jawab</th>
            <th scope="col">Ruang</th>
            <th scope="col">Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Kondisi</th>
            <th scope="col">Tanggal Pinjam</th>

                </tr>
            </thead>
             @foreach ($laporanpinjams as $pinjam)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pinjam-> pj}}</td>
            <td>{{ $pinjam-> ruang}}</td>
            <td>{{ $pinjam-> barang}}</td>
            <td>{{ $pinjam-> jumlah}}</td>
            <td>{{ $pinjam-> kondisi}}</td>
            <td>{{ $pinjam-> created_at}}</td> 
 

            </tr>
            @endforeach
        </table>
    </div>
</body>
 <br>
 <br>
 
 
 <h6 align="right">
@php $tgl=date('d-m-Y'); @endphp
   Bogor,{{$tgl}} 
   </br>
Kepala Sekolah

</h6>
</br>
</br>
</br>
</br>
</br>

<h6 align="right"> 
Dr.Agisti Setia Putri S.Kom

</h6>
<script type="text/javascript">
    window.print();
</script>


<script type="text/javascript">
    function redirect() {
        window.location.href = '@php echo $redirect; @endphp';
    }
</script>
</html>