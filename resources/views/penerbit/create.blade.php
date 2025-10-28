@include('layout.header')
<div class="container mt-4">
    <h3>Buat Penerbit</h3>
    <form action="{{ route('penerbit.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_penerbit" class="form-label">Nama Penerbit</label>
            <input type="text" class="form-control" name="nama_penerbit" placeholder="Masukkan nama penerbit" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@include('layout.footer')