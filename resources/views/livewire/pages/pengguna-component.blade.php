<div>
    <a href="{{ route('pengguna.create') }}" class="btn btn-success">Tambah Pengguna</a>
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
                            <th>Nama Lengkap</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role User</th>
                            <th class="w-1">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCategories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->password}}</td>
                                <td>{{ $item->roleuser}}</td>
                                <td class="d-flex gap-1">
                                    <a href="" class="btn btn-blue">Edit</a>
                                    <a href="#" wire:click.prevent="destroy({{ $item->id }})" class="btn btn-red">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
