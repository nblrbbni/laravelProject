<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

     <div class="title">
        <h1>Tambah Pengguna</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit="create" autocomplete="off">
                <div class="mb-3">
                    <input type="text" wire:model="name" class="form-control" name="example-text-input" placeholder="Masukkan nama lengkap">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <select type="text" class="form-select tomselected ts-hidden-accessible" id="select-users"
                        value="" tabindex="1" wire:model="jabatan">
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
                    <input type="text" wire:model="email" class="form-control" name="example-text-input" placeholder="Masukkan email">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" wire:model="password" class="form-control" name="example-text-input" placeholder="Masukkan passsword">
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
                <a href="">
                    <button class="btn btn-red">Kembali</button>
                </a>
            </form>
        </div>
    </div>

</div>
