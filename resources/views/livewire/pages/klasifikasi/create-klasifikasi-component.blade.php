<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="title mt-3">
        <h1>Tambah Klasifikasi</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="create" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" wire:model="name" class="form-control" placeholder="Masukkan nama lengkap">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Jabatan</div>
                    <select type="text" class="form-select" id="select-users" wire:model="jabatan">
                        <option selected="">Pilih Jabatan Anda</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                        <option value="Tata Usaha">Tata Usaha</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Staff">Staff</option>
                        <option value="Guru">Guru</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('klasifikasi') }}" class="btn btn-red">
                    Kembali
                </a>
            </form>
        </div>
    </div>

</div>
