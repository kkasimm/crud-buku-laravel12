@include('layout.header')

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-4">Buat Buku</h3>

            <form action="{{ route('buku.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="penulis" placeholder="Masukkan penulis buku" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukkan tahun terbit"
                        required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Penerbit</label>
                        <select class="form-select" name="penerbit_id">
                            @foreach ($penerbit as $p)
                                <option value="{{ $p->id }}">{{ $p->nama_penerbit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="kategori_id">
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@include('layout.footer')