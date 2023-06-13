<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="title mt-3">
        <h1>Update Arsip</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit="update" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Nama Dokumen</label>
                    <input type="text" wire:model="name" class="form-control" name="example-text-input"
                        placeholder="Masukkan nama dokumen">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Diupload oleh</div>
                    <select type="text" class="form-select" id="select-users" wire:model="upload">
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
                    <div class="form-label">Tanggal Upload</div>
                    <input type="date" id="date" name="date" wire:model="date" class="form-control">
                    @error('date')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Pilih File</div>
                    <input type="file" name="file" wire:model="file" class="form-control">
                    @error('file')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('arsip') }}" class="btn btn-red">
                   Kembali
                </a>
            </form>
        </div>
    </div>


</div>
