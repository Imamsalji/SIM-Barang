<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">SIM Inventaris Barang</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">SIM Inventaris Barang</a>
      </div>
      <ul class="sidebar-menu">

          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="fas fa-fire"></i>
              <span>Dashboard</span>
            </a>
          </li>

            <li class="menu-header">Data Master</li>
            @if (auth()->user()->level=="admin")
            <li class="nav-item dropdown {{ Request::is('users/user') ? 'sidebar-item active' : '' }} || {{ Request::is('users/admin') ? 'sidebar-item active' : '' }} || {{ Request::is('users/distributor') ? 'sidebar-item active' : '' }} || {{ request()->is('users/pjruangan') ? 'active' : '' }}">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-users"></i> 
                <span>Data User</span>
              </a>
              <ul class="dropdown-menu">
              <li class="{{ request()->is('users/user') ? 'active' : '' }}"><a class="nav-link" href="{{ route('user') }}">Semua User</a></li>
                    <li class="{{ request()->is('users/admin') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin', 'admin')}}">Admin</a></li>
                    <li class="{{ request()->is('users/distributor') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin', 'distributor')}}">Distributor</a></li>
                    <li class="{{ request()->is('users/pjruangan') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin', 'pjruangan')}}">Pj Ruangan</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('kategori') ? 'sidebar-item active' : '' }} || {{ Request::is('satuan') ? 'sidebar-item active' : '' }} || {{ Request::is('klasifikasi') ? 'sidebar-item active' : '' }} || {{ Request::is('rayon') ? 'sidebar-item active' : '' }} || {{ request()->is('dana') ? 'active' : '' }} || {{ request()->is('toko') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-retweet"></i>
                    <span>Data Dasar
                    </span>
                    </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('kategori') ? 'active' : '' }}"><a class="nav-link" href="{{route('kategori')}}">List Kategori</a></li>
                    <li class="{{ request()->is('satuan') ? 'active' : '' }}"><a class="nav-link" href="{{route('satuan')}}">List Satuan</a></li>
                    <li class="{{ request()->is('klasifikasi') ? 'active' : '' }}"><a class="nav-link" href="{{route('klasifikasi')}}">List Klasifikasi</a></li>
                    <li class="{{ request()->is('rayon') ? 'active' : '' }}"><a class="nav-link" href="{{route('rayon')}}">List Rayon</a></li>
                    <li class="{{ request()->is('dana') ? 'active' : '' }}"><a class="nav-link" href="{{route('dana')}}">Sumber dana</a></li>
                    <li class=""><a class="nav-link" href="{{route('toko')}}">Toko</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-retweet"></i>
                    <span>Perbaikan</span>
                    </a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="">Perbaikan</a></li>
                   
                </ul>
            </li>
            
            <li class="nav-item dropdown {{ request()->is('barang') ? 'active' : '' }} || {{ request()->is('ruangan') ? 'active' : '' }} || {{ request()->is('create_barang') ? 'active' : '' }} || {{ request()->is('create_ruangan') ? ' active' : '' }} || {{ request()->is('Tanah') ? ' active' : '' }} || {{ request()->is('habis') ? ' active' : '' }} || {{ request()->is('habis/create') ? ' active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-handshake"></i>
                    <span>Transaksi Barang Masuk</span>
                    </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('Tanah') ? 'active' : '' }} || {{ request()->is('') ? 'active' : '' }}"><a class="nav-link" href="{{ route('Tanah.index') }}">Data Tanah</a></li>
                    <li class="{{ request()->is('ruangan') ? 'active' : '' }} || {{ request()->is('create_ruangan') ? 'active' : '' }}"><a class="nav-link" href="{{ route('ruangan') }}">Bangunan dan Ruangan</a></li>
                    <li class="{{ request()->is('barang') ? 'active' : '' }} || {{ request()->is('create_barang') ? 'active' : '' }}"><a class="nav-link" href="{{ route('barang') }}">Barang tidak habis pakai</a></li>
                    <li class="{{ request()->is('habis') ? 'active' : '' }} || {{ request()->is('habis/create') ? 'active' : '' }}"><a class="nav-link" href="{{ route('habis.index') }}">Barang habis pakai</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown {{ request()->is('input') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-handshake"></i>
                    <span>Transaksi Barang Keluar</span>
                    </a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ url('pinjam') }}">Data Peminjaman Barang</a></li>
                    <li class=""><a class="nav-link" href="">Data Mutasi</a></li>
                    <li class=""><a class="nav-link" href="">Penghapusan Barang</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-file-alt"></i>
                    <span>Laporan</span>
                    </a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ url('laporanpinjam') }}">Laporan Pengembalian Barang</a></li>
                    <li class=""><a class="nav-link" href="">Laporan Barang Habis Pakai</a></li>
                    <li class=""><a class="nav-link" href="">Laporan Barang Tidak Habis Pakai</a></li>
                    <li class=""><a class="nav-link" href="">Laporan Tanah</a></li>
                    <li class=""><a class="nav-link" href="">Laporan Bangunan dan Ruangan</a></li>
                    <li class=""><a class="nav-link" href="">Laporan Mutasi</a></li>
                    <li class=""><a class="nav-link" href="">Laporan Penghapusan Barang</a></li>
                    <li class=""><a class="nav-link" href="">Cetak Lebel</a></li>
                    <li class=""><a class="nav-link" href="">Scan QrCode</a></li>
                </ul>
            </li>
            
            @endif
        </ul>
    </aside>
  </div>
