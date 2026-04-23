@include('layouts.header')

<h3 class="mb-4">Data Jabatan</h3>

<a href="{{ route('jabatan.create') }}" class="btn btn-primary mb-3">
    + Tambah Jabatan
</a>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th width="50">No</th>
                        <th>Nama Jabatan</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jabatans as $j)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $j->nama_jabatan }}</td>
                        <td>
                            <a href="{{ route('jabatan.edit', $j->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('jabatan.destroy', $j->id) }}"
                                method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin hapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @if($jabatans->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center">Data kosong</td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>

@include('layouts.footer')