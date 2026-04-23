@include('layouts.header')

<div class="text-center">
    <h2 class="mb-3">Selamat Datang</h2>
    <p class="text-muted">
        Sistem Informasi Manajemen Data Pegawai dan Jabatan
    </p>
</div>

<div class="row mt-4 g-3">

    <div class="col-12 col-md-6">
        <div class="card shadow h-100">
            <div class="card-body text-center">
                <h5 class="card-title">Data Pegawai</h5>
                <p class="card-text">Kelola seluruh data pegawai</p>
                <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Masuk</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="card shadow h-100">
            <div class="card-body text-center">
                <h5 class="card-title">Data Jabatan</h5>
                <p class="card-text">Kelola data jabatan pegawai</p>
                <a href="{{ route('jabatan.index') }}" class="btn btn-success">Masuk</a>
            </div>
        </div>
    </div>

</div>

@include('layouts.footer')