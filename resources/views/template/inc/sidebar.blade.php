<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
              <img src="{{ asset('assets/static/arsip.png') }}" height="60" class="mt-3 mb-3" alt="Arsip">
            </a>
          </h1>
          <div class="collapse navbar-collapse" id="sidebar-menu">
           <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link {{ Request::path() === '/' ? 'bg-primary' : '' }}" href="{{ route('dashboard') }}">
            <span class="nav-link-title"> Home </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::path() === 'arsip' ? 'bg-primary' : '' }}" href="{{ route('arsip') }}">
            <span class="nav-link-title"> Arsip </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::path() === 'perusahaan' ? 'bg-primary' : '' }}" href="{{ route('perusahaan') }}">
            <span class="nav-link-title"> Galeri File </span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            role="button" aria-expanded="false">
            <span class="nav-link-title"> Pengaturan </span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item {{ Request::path() === 'role' ? 'bg-primary' : '' }}" href="{{ route('role') }}" rel="noopener">
                Role
            </a>
            <a class="dropdown-item {{ Request::path() === 'pengguna' ? 'bg-primary' : '' }}" href="{{ route('pengguna') }}" rel="noopener">
                Pengguna
            </a>
            <a class="dropdown-item {{ Request::path() === 'klasifikasi' ? 'bg-primary' : '' }}" href="{{ route('klasifikasi') }}" rel="noopener">
                Klasifikasi
            </a>
        </div>
    </li>
</ul>
          </div>
        </div>
      </aside>
