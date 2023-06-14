<div class="mt-3 mb-3">
    <a href="{{ route('klasifikasi.create') }}" class="btn btn-success">Tambah Klasifikasi</a>
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
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th class="w-1">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $allCategories->firstItem() ?>
                        @foreach ($allCategories as $item)
                            <tr>
                                <td>{{ $i}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td class="d-flex gap-1">
                                    <a href="{{ route('klasifikasi.update', $item->id) }}" class="btn btn-blue">Edit</a>
                                    <a href="#" wire:click.prevent="destroy({{ $item->id }})" class="btn btn-red">Delete</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{ $allCategories->links() }}
