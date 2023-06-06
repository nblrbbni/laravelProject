<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <span class="nav-link-title"> Home </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('arsip') }}">
            <span class="nav-link-title"> Arsip </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('perusahaan') }}">
            <span class="nav-link-title"> Perusahaan </span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            role="button" aria-expanded="false">
            <span class="nav-link-title"> Pengaturan </span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#" target="_blank" rel="noopener">
                Role
            </a>
            <a class="dropdown-item" href="#">
                Pengguna
            </a>
            <a class="dropdown-item" href="#" target="_blank" rel="noopener">
                Klasifikasi
            </a>
            <a class="dropdown-item" href="#" target="_blank" rel="noopener">
                Sifat Surat
            </a>
        </div>
    </li>
</ul>
