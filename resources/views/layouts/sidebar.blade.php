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
                    <span>List Data</span>
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
            
            <li class="nav-item dropdown {{ request()->is('barang') ? 'active' : '' }} || {{ request()->is('ruangan') ? 'active' : '' }} || {{ request()->is('create_barang') ? 'active' : '' }} || {{ request()->is('create_ruangan') ? ' active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-clipboard-list"></i>
                    <span>Data Dasar</span>
                    </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('barang') ? 'active' : '' }} || {{ request()->is('create_barang') ? 'active' : '' }}"><a class="nav-link" href="{{ route('barang') }}">Data Barang{{ request()->is('create_barang') ? ' ->Create' : '' }}</a></li>
                    <li class="{{ request()->is('ruangan') ? 'active' : '' }} || {{ request()->is('create_ruangan') ? 'active' : '' }}"><a class="nav-link" href="{{ route('ruangan') }}">Data Ruangan{{ request()->is('create_ruangan') ? ' ->Create' : '' }}</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ request()->is('input') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-handshake"></i>
                    <span>Data Transaksi</span>
                    </a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{ url('pinjamans') }}">Data Peminjaman</a></li>
                    <li class=""><a class="nav-link" href="">Data Barang Ruangan</a></li>
                    <li class="{{ request()->is('input') ? 'active' : '' }}"><a class="nav-link" href="{{ route('input') }}">Data Barang Masuk</a></li>
                    <li class=""><a class="nav-link" href="">Data Barang Keluar</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-file-alt"></i>
                    <span>Laporan</span>
                    </a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="">Laporan peruangan</a></li>
                    <li class=""><a class="nav-link" href="">laporan Barang Keluar</a></li>
                    <li class=""><a class="nav-link" href="">laporan Barang Masuk</a></li>
                    <li class=""><a class="nav-link" href="">Cetak Lebel</a></li>
                    <li class=""><a class="nav-link" href="">Scan QrCode</a></li>
                </ul>
            </li>
            @endif
        </ul>
    </aside>
  </div>
