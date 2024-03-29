<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="title mt-3">
        <h1>Tambah Arsip</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="create" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Nama Dokumen</label>
                    <input type="text" wire:model="name" class="form-control" placeholder="Masukkan nama dokumen">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Tipe File <span class="text-danger">*Tidak bisa mengupload file selain tipe file berikut.<span></div>
                    <select type="text" class="form-select" id="select-users" wire:model="tipe">
                        <option selected="">--Pilih Tipe File--</option>
                        <option value="DOCS">DOCS</option>
                        <option value="EXCEL">EXCEL</option>
                        <option value="PPT">PPT</option>
                        <option value="PDF">PDF</option>
                        <option value="Staff">IMG</option>
                    </select>
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-label">Diupload oleh</div>
                    <select type="text" class="form-select" id="select-users" wire:model="upload">
                        <option selected="">--Pilih Jabatan Anda--</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                        <option value="Tata Usaha">Tata Usaha</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Staff">Staff</option>
                        <option value="Guru">Guru</option>
                    </select>
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
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
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('arsip') }}" class="btn btn-red">
                    Kembali
                </a>
            </form>
        </div>
    </div>


</div>
