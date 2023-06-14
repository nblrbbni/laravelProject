<div class="mt-3">
    <a href="{{ route('role.create') }}" class="btn btn-success">Tambah Role</a>
    <div class="mt-2">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Role</th>
                            <th class="w-1">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCategories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->role }}</td>
                                <td class="d-flex gap-1">
                                    <a href="{{ route('role.update', $item->id) }}" class="btn btn-blue">Edit</a>
                                    <a onsubmit="return confirm(Yakin ingin menghapus data?)" href="#" wire:click.prevent="destroy({{ $item->id }})" class="btn btn-red">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
