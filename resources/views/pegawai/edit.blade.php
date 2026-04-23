@include('layouts.header')

<h3 class="mb-4">Edit Data Pegawai</h3>

<a href="{{ route('pegawai.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

<div class="card">
    <div class="card-body">
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="col-12 col-md-6">
                <label class="form-label">Nama Pegawai</label>
                <input type="text" name="nama_pegawai"
                       class="form-control"
                       value="{{ old('nama_pegawai', $pegawai->nama_pegawai) }}" required>
            </div>

            <div class="col-12 col-md-6">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control">{{ old('alamat', $pegawai->alamat) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" name="nomor_telepon"
                       class="form-control"
                       value="{{ old('nomor_telepon', $pegawai->nomor_telepon) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <select name="jabatan_id" class="form-select">
                    <option value="">Pilih Jabatan</option>
                    @foreach ($jabatans as $jabatan)
                        <option value="{{ $jabatan->id }}"
                            {{ old('jabatan_id', $pegawai->jabatan_id) == $jabatan->id ? 'selected' : '' }}>
                            {{ $jabatan->nama_jabatan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
</div>

@include('layouts.footer')