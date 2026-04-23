@include('layouts.header')

<h3 class="mb-4">Tambah Data Pegawai</h3>

<a href="{{ route('pegawai.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

<div class="card">
    <div class="card-body">
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf

            <div class="row g-3">
                
                <!-- KIRI -->
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" required>
                    </div>

                     <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3"></textarea>
                    </div>
                    
                </div>

                <!-- KANAN -->
                <div class="col-12 col-md-6">
                   
                    <div class="mb-3">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <select name="jabatan_id" class="form-select">
                            <option value="">Pilih Jabatan</option>
                            @foreach ($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}">
                                    {{ $jabatan->nama_jabatan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

@include('layouts.footer')