<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

     <div class="title mt-3">
        <h1>Tambah Pengguna</h1>
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

                <div class="mb-3">
                    <div class="form-label">Email</div>
                    <input type="text" wire:model="email" class="form-control" placeholder="Masukkan email">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Password</div>
                    <input type="text" wire:model="password" class="form-control" placeholder="Masukkan passsword">
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Pilih Role:</div>
                    <div wire:model="roleuser">
                        <label class="form-check form-check-inline">
                            <input value="Admin" class="form-check-input" type="radio" name="radios-inline">
                            @error('roleuser')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            <span class="form-check-label">Admin</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input value="User  " class="form-check-input" type="radio" name="radios-inline">
                            @error('roleuser')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            <span class="form-check-label">User</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('pengguna') }}" class="btn btn-red">
                   Kembali
                </a>
            </form>
        </div>
    </div>

</div>
