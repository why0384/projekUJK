@include('layouts.header')

<h3 class="mb-4">Edit Jabatan</h3>

<a href="{{ route('jabatan.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

<div class="card">
    <div class="card-body">
        <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Jabatan</label>
                <input type="text" name="nama_jabatan"
                       class="form-control"
                       value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}"
                       required>
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
</div>

@include('layouts.footer')