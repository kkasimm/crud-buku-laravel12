@include('layout.header')

<div class="container mt-5">
    <div class="card border-0 shadow-sm">
        <div class="card-body text-center py-5">
            <h1 class="fw-bold mb-3">Selamat Datang di Aplikasi Buku</h1>
            <p class="text-muted mb-4">Kelola data buku, penerbit, dan kategori dengan mudah!</p>

            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('buku.index') }}" class="btn btn-primary px-4">
                    <i class="bi bi-book"></i> Lihat Buku
                </a>
                <a href="{{ route('kategori.index') }}" class="btn btn-success px-4">
                    <i class="bi bi-tags"></i> Kategori
                </a>
                <a href="{{ route('penerbit.index') }}" class="btn btn-warning px-4 text-white">
                    <i class="bi bi-building"></i> Penerbit
                </a>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mb-3">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
                <h5 class="fw-bold">Total Buku</h5>
                <p class="fs-4 text-primary fw-semibold">{{ \App\Models\buku::count() }}</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
                <h5 class="fw-bold">Total Kategori</h5>
                <p class="fs-4 text-success fw-semibold">{{ \App\Models\kategori::count() }}</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
                <h5 class="fw-bold">Total Penerbit</h5>
                <p class="fs-4 text-warning fw-semibold">{{ \App\Models\penerbit::count() }}</p>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
