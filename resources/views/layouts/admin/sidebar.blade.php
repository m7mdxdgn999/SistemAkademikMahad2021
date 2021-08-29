<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Ma'had Al-Jmi'ah</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">MA</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
              <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
            </ul>
          </li>
          <li class="menu-header">Mahaad Al-Jam'iah</li>
          <li class=""><a class="nav-link" href="{{ route('admin.mabna.index') }}"><i class="fas fa-building"></i><span>Mabna</span></a></li> 
          <li class=""><a class="nav-link" href="{{ route('admin.pembinaan.index') }}"><i class="fas fa-book"></i><span>Pembinaaan</span></a></li>
          <li class=""><a class="nav-link" href="{{ route('admin.tahun_akademik.index') }}"><i class="fas fa-calendar-week"></i><span>Tahun kademik</span></a></li>
          <li class=""><a class="nav-link" href="{{ route('admin.kurikulum.index') }}"><i class="fas fa-school"></i><span>Kurikulum</span></a></li>
          <li class=""><a class="nav-link" href="{{ route('admin.jadwal.index') }}"><i class="fas fa-clipboard-list"></i><span>Jadwal Pembinaan</span></a></li>
          <li class="menu-header">Musyrif</li>
          <li class=""><a class="nav-link" href="{{ route('admin.dosen.index') }}"><i class="fas fa-chalkboard-teacher"></i><span>Musyrif</span></a></li>
          <li class="menu-header">Mahasiwsa</li>
          <li class=""><a class="nav-link" href="{{ route('admin.mahasiswa.index') }}"><i class="fas fa-user-graduate"></i><span>Mahasiwsa</span></a></li>           
        </ul>
    </aside>
  </div>