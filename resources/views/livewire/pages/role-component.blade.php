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
                                    <a href="#" wire:click.prevent="destroy({{ $item->id }})"
                                        class="btn btn-red">Delete</a>
                                    {{--  <a href="#" class="btn btn-red" data-bs-toggle="modal"
                                        data-bs-target="#modal-danger">
                                        Delete
                                    </a>  --}}
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        {{--  <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status bg-danger"></div>
                    <div class="modal-body text-center py-4">
                        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
                        <path d="M12 9v4" />
                        <path d="M12 17h.01" />
                    </svg>
                    <h3>Are you sure?</h3>
                    <div class="text-muted">
                        Do you want to delete this data? What you've done cannot be
                        undone.
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal"
                                    wire:click.prevent="destroy({{ $item->id }})">
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
</div>

{{--  <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
<script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>  --}}
