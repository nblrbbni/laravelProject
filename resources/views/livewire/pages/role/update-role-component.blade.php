<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <input type="text" wire:model="role" class="form-control" placeholder="Masukkan nama role">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('role') }}" class="btn btn-red">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
