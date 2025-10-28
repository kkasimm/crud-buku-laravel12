@include('layout.header')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0">buku</h5>
        </div>

        <div class="card-body">
            <div class="d-flex">
                <p class="fw-semibold mb-0 me-2">Judul :</p>
                <p class="mb-0">{{ $buku->judul }}</p>
            </div>
            <div class="d-flex mt-2">
                <p class="fw-semibold mb-0 me-2">Penulis :</p>
                <p class="mb-0">{{ $buku->penulis }}</p>
            </div>
            <div class="d-flex mt-2">
                <p class="fw-semibold mb-0 me-2">Tahun Terbit :</p>
                <p class="mb-0">{{ $buku->tahun_terbit }}</p>
            </div>
            <div class="d-flex mt-2">
                <p class="fw-semibold mb-0 me-2">Penerbit :</p>
                <p class="mb-0">{{ $buku->penerbit_id }}</p>
            </div>
            <div class="d-flex mt-2">
                <p class="fw-semibold mb-0 me-2">Kategori :</p>
                <p class="mb-0">{{ $buku->kategori_id }}</p>
            </div>
        </div>

        @include('layout.footer')