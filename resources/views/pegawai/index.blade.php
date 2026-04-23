@include('layouts.header')

<h3 class="mb-4">Data Pegawai</h3>

<a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">
    + Tambah Pegawai
</a>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th width="50">No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Jabatan</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawais as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama_pegawai }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->nomor_telepon }}</td>
                        <td>{{ $p->jabatan ? $p->jabatan->nama_jabatan : '-' }}</td>
                        <td>
                            <a href="{{ route('pegawai.edit', $p->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('pegawai.destroy', $p->id) }}"
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

                    @if($pegawais->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Data kosong</td>
                    </tr>
                    @endif

                </tbody>
            </table>  
        </div>
       

    </div>
</div>

@include('layouts.footer')