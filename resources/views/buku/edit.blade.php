@include('layout.header')
<div class="container mt-4">
    <h3>Edit Buku</h3>
    <form action="{{ route('buku.update', $buku->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="{{ $buku->penulis }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Penerbit</label>
                <select class="form-select" name="penerbit_id">
                    @foreach ($penerbit as $p)
                        <option value="{{ $p->id }}" {{ ($p->id == $buku->penerbit_id) ? 'selected':'' }}>{{ $p->nama_penerbit }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}" {{ ($k->id == $buku->kategori_id) ? 'selected':'' }}>{{ $k->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@include('layout.footer')