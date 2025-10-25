<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="penerbit">Penerbit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buku">Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0 text-secondary">Kategori</h5>
                <button class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg"></i> Tambah
                </button>
            </div>

            <div class="card-body">
                <table class="table table-bordered text-center align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">Nama Kategori</td>
                            <td scope="col">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allkate as $key => $r)
                            <tr>
                                <td scope="row">{{ $key + 1 }}</td>
                                <td>{{ $r->nama_kategori }}</td>
                                <td>
                                    
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="footer text-center text-muted small">
                © 2024 Hari Aspriyono
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>