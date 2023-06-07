<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link {{ Request::path() === '/' ? 'text-primary' : '' }}" href="{{ route('dashboard') }}">
            <span class="nav-link-title"> Home </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::path() === 'arsip' ? 'text-primary' : '' }}" href="{{ route('arsip') }}">
            <span class="nav-link-title"> Arsip </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::path() === 'perusahaan' ? 'text-primary' : '' }}" href="{{ route('perusahaan') }}">
            <span class="nav-link-title"> Galeri File </span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            role="button" aria-expanded="false">
            <span class="nav-link-title"> Pengaturan </span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item {{ Request::path() === 'role' ? 'text-light bg-primary' : '' }}" href="{{ route('role') }}" rel="noopener">
                Role
            </a>
            <a class="dropdown-item" href="#">
                Pengguna
            </a>
            <a class="dropdown-item" href="#" rel="noopener">
                Klasifikasi
            </a>
            <a class="dropdown-item" href="#" rel="noopener">
                Sifat Surat
            </a>
        </div>
    </li>
</ul>
