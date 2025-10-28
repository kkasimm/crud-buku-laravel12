@include('layout.header')
<div class="container mt-4">
    <h3>Edit Kategori</h3>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@include('layout.footer')
