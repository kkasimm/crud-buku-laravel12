@include('layout.header')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0">Buku</h5>
            <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm">Tambah</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered text-center align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">Judul Buku</td>
                        <td scope="col">Penulis</td>
                        <td scope="col">Tahun</td>
                        <td scope="col">Penerbit</td>
                        <td scope="col">Kategori</td>
                        <td scope="col">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allkate as $key => $r)
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td>{{ $r->judul }}</td>
                            <td>{{ $r->penulis }}</td>
                            <td>{{ $r->tahun_terbit }}</td>
                            <td>{{ $r->penerbit->nama_penerbit }}</td>
                            <td>{{ $r->kategori->nama_kategori }}</td>
                            <td>
                                <form action="{{ route('buku.destroy', $r->id) }}" method="post">

                                    <a href="{{ route('buku.show', $r->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{ route('buku.edit', $r->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('layout.footer')