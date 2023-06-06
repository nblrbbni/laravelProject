<div>
    <a href="{{ route('arsip.create') }}" class="btn btn-success">Tambah Arsip</a>
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Dokumen</th>
                            <th>Nama File</th>
                            <th>Diupload oleh</th>
                            <th>Tanggal</th>
                            <th>Opsi</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCategories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->file }}</td>
                                <td>{{ $item->upload }}</td>
                                <td>{{ $item->date }}</td>
                                <td class="d-flex gap-1">
                                    <a href="{{ route('arsip.update', $item->id) }}" class="btn btn-blue">Edit</a>
                                    <a href="#" class="btn btn-red">Delete</a>
                                    <a href="{{ $item->file }}" download>
                                        <button class="btn btn-green">Unduh</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
