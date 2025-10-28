@include('layout.header')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0">Kategori</h5>
        </div>

        <div class="card-body">
            <div class="d-flex">
                <p class="fw-semibold mb-0 me-2">Nama Kategori :</p>
                <p class="mb-0">{{ $kategori->nama_kategori }}</p>
            </div>
        </div>

        @include('layout.footer')