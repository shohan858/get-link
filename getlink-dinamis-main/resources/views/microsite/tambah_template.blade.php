@extends('admin.base')
@section('konten')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Gambar Sponsor<h4>
            </div>
            <div class="card-body">
                <table class="table">
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#tambahbaru">
                    Tambah Template
                </button>
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Template name</th>
                            <th>Background template</th>
                            <th>Kategori</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php $no = 1?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                              {{ $item->nama_template }}
                            </td>
                            <td>
                              <img src="{{ asset('uploads/uploads/' . $item->background_template ) }}" width="50px" alt="image">
                            </td>
                            <td>
                              @foreach ($data2 as $item2)
                                @if ($item->kategori == $item2->id)
                                  {{ $item2->title }}
                                @endif
                              @endforeach
                            </td>
                            <td class="">
                              <a href="{{ '/collab/'.$item->id.'/edit' }}" class="btn btn-warning btn-sm" type="button">
                                Edit Data
                              </a>
                              <form class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data ???')" action="{{ '/collab/'.$item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                              </form>
                            </td>
                        </tr>
                        <?php $no++ ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="tambahbaru" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Template</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="store_template" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="modal-body">
                <label for="formFile" class="form-label">Masukan nama template</label>
                <input class="form-control" name="nama" type="text" id="formFile" required >
                <label for="formFile" class="form-label">Masukkan Background Template</label>
                <input class="form-control" name="background" type="file" id="formFile" required >
                <label for="formFile" class="form-label">Masukkan File</label>
                <input class="form-control" name="template" type="file" id="formFile" required >
                <input type="number" name="kategori">
              </div>
              
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection