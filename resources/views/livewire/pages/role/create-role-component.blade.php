<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

     <div class="title">
        <h1>Tambah Role</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit="create" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <input type="text" wire:model="role" class="form-control" name="example-text-input" placeholder="Masukkan nama role">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="">
                    <button class="btn btn-red">Kembali</button>
                </a>
            </form>
        </div>
    </div>

</div>
