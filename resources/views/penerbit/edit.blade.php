@include('layout.header')
<div class="container mt-4">
    <h3>Edit Penerbit</h3>
    <form action="{{ route('penerbit.update', $penerbit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_penerbit" class="form-label">Nama Penerbit</label>
            <input type="text" class="form-control" name="nama_penerbit" value="{{ $penerbit->nama_penerbit }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@include('layout.footer')
