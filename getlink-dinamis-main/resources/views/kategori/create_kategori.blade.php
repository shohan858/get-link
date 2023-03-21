    @extends('admin.base')
@section('konten')
    <h2>Tambahkan kategori</h2>
    <form action="{{ url('/create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">gambar/icon</label>
        <input class="form-control" name="icon" type="file" required >
        <label for="">tambahkan title</label>
        <input type="text" class="form-control" name="title" " placeholder="masukan title" aria-label="masukan title " aria-describedby="basic-addon1" required>
        <label for="">warna button </label>
        <input type="color" class="form-control" name="color" " aria-describedby="basic-addon1" required>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-3">Tambah</button>
          </div>



    </form>
@endsection