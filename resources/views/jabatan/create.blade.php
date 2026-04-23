@include('layouts.header')

<h3 class="mb-4">Tambah Jabatan</h3>

<a href="{{ route('jabatan.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

<div class="card">
    <div class="card-body">
        <form action="{{ route('jabatan.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Jabatan</label>
                <input type="text" name="nama_jabatan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

@include('layouts.footer')