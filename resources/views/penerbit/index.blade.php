@include('layout.header')
<div class="container mt-5">
    <div class="card shadow-sm border-0">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0">Penerbit</h5>
            <a href="{{ route('penerbit.create') }}" class="btn btn-primary btn-sm">Tambah</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered text-center align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">Nama Penerbit</td>
                        <td scope="col">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allkate as $key => $r)
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td>{{ $r->nama_penerbit }}</td>
                            <td>
                                <form action="{{ route('penerbit.destroy', $r->id) }}" method="post">

                                    <a href="{{ route('penerbit.show', $r->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{ route('penerbit.edit', $r->id) }}" class="btn btn-warning btn-sm">Edit</a>
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