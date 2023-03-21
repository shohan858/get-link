<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Web</title>

  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CSS Custom -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Edit Microsite</a>
    </div>
  </nav>
  <div class="container">{{ Breadcrumbs::render('editmicrosite',$data) }}</div>
  <a href="/microsite" class="btn btn-secondary btn-sm m-3"><<< Kembali</a>

  <div class=" mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-header">Edit</h5>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ '/microsite/'.$data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <b>Edit Header</b>
                        <input type="file" name="icon" class="form-control mb-2">
                        <input type="text" placeholder="Judul" name="title" value="{{ $data->title }}" class="form-control mb-2">
                        <input type="text" placeholder="Bio" name="bio" value="{{ $data->bio }}" class="form-control mb-2">
                        <input type="text" placeholder="Instagram" name="instagram" value="{{ $data->instagram }}" class="form-control mb-2">
                        <input type="text" placeholder="twitter" name="twitter" value="{{ $data->twitter }}" class="form-control mb-2">
                        <input type="text" placeholder="facebook" name="facebook" value="{{ $data->facebook }}" class="form-control mb-2">
                        <input type="text" placeholder="youtube" name="youtube" value="{{ $data->youtube }}" class="form-control mb-2">
                        <input type="text" placeholder="tiktok" name="tiktok" value="{{ $data->tiktok }}" class="form-control mb-2">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <b>Edit Video</b><br>
                    @if($video == null)
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#video">
                        Tambah Link Video
                    </button>
                    @elseif (!$video == null)
                    {{-- @foreach ($video as $item) --}}
                        <form action="{{ '/video/'.$video->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" name="link" placeholder="Link" value="{{ $video->link }}" class="form-control mb-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    {{-- @endforeach --}}
                    @endif
                </div>
                <div class="col-md-12 mt-3">
                    <hr style="border-top:2px solid black">
                    <b>Edit Konten</b><br>
                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#konten">
                        Tambah Konten
                    </button>
                    @if (!$konten == null)
                    @foreach ($konten as $item)
                    <h3 class="mt-4">Konten : {{ $item->title }}</h3>
                        <form class="mb-1" action="{{ '/konten/'.$item->id }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" placeholder="Link" name="link" value="{{ $item->link }}" class="form-control mb-2">
                            <input type="file" placeholder="image" name="image" class="form-control mb-2">
                            <input type="text" placeholder="Title" name="title" value="{{ $item->title }}" class="form-control mb-2">
                            <input type="text" placeholder="Deskripsi" name="deskripsi" value="{{ $item->description }}" class="form-control mb-2">
                            <button type="submit" class="btn btn-primary btn-sm w-100">Update</button>
                        </form>
                        <form class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data ???')" action="{{ '/konten/'.$item->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm w-100">Hapus</button>
                        </form>
                        <hr style="border-bottom:2px solid black ">
                        @endforeach
                    @endif  
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-header">Preview</h5>
            <div class="text-center mt-3">
                @if($data->icon)
                <img class="img-profile rounded-circle bg-primary" src="{{ asset("uploads/$data->icon") }}" width="15%" height="15%" alt="">
                @elseif (!$data->icon)
                <i class="fas fa-user-circle" style="font-size: 50px"></i>
                @endif
            </div>
            <div class="text-center">
                @if ($data->title)
                <h4 style="font-family: 'Franklin Gothic Medium'">{{ $data->title }}</h4>
                @elseif (!$data->title)
                Bagian Judul
                @endif
            </div>
            <div class="text-center">
                @if ($data->bio)
                <p>{{ $data->bio }}</p>
                @elseif (!$data->bio)
                Bagian Bio
                @endif
            </div>
            <div class="text-center">
                @if($data->instagram)
                <a href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a>
                @endif
                @if($data->twitter)
                <a href="{{ $data->instagram }}"><i class="fab fa-twitter"></i></a>
                @endif
                @if($data->facebook)
                <a href="{{ $data->instagram }}"><i class="fab fa-facebook"></i></a>
                @endif
                @if($data->youtube)
                <a href="{{ $data->instagram }}"><i class="fab fa-youtube"></i></a>
                @endif
                @if($data->tiktok)
                <a href="{{ $data->instagram }}"><i class="fab fa-tiktok"></i></a>
                @else
                    <p>Bagian Sosial Media</p>
                @endif
            </div>
            <div class="text-center">
                @if (!$video == null)
                    @if ($video->link)
                    <div class="iframe"><iframe src="{{ $video->link }}" class="w-100" frameborder="0"></iframe></div>
                    @elseif (!$video->link)
                    Bagian Preview Youtube
                    @endif
                @else
                    Bagian Preview Youtube
                @endif
            </div>
            <div class="text-center mt-4">
                @if(!$konten == null)
                    <div class="row">
                        @foreach ($konten as $item)
                        <div class="col-md-4 text-center">
                            <div class="card text-center">
                                <img class="text-center" src="{{ asset("uploads/$item->image") }}" alt="" width="200px" height="200px">
                                <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <a href="{{ $item->link }}" class="btn btn-primary">Lihat</a>    
                                </div>    
                            </div>
                        </div>    
                        @endforeach           
                    </div>
                @else
                    Bagian Konten
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






  <!-- Modal Tambah Video-->
  <div class="modal fade" id="video" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Baru</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form style="font-family: 'comic sans ms'" action="/video" method="POST">
        <div class="modal-body">
                @csrf
                <div class="form-group{{ $errors->has('link') ? 'has-error' : ''}}">
                    <label for="link">Link Youtube</label>
                    <input type="text" name="link" class="form-control" id="link" {{ old('link') }}>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-dark">Kirim</button>
        </div>
    </form>
      </div>
    </div>
  </div>
<!-- End Modal Tambah Video-->


  <!-- Modal Tambah Konten-->
  <div class="modal fade" id="konten" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Baru</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form style="font-family: 'comic sans ms'" action="/konten" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="img">Gambar</label>
                    <input type="file" name="image" class="form-control" id="img" {{ old('image') }}>
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" class="form-control" id="link" {{ old('link') }}>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" {{ old('title') }}>
                </div>
                <div class="form-group">
                    <label for="des">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="des" {{ old('deskripsi') }}>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-dark">Kirim</button>
        </div>
    </form>
      </div>
    </div>
  </div>
<!-- End Modal Tambah Konten-->



  



<!-- JS Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-4Nv7/5X5AxzSj8uA5g5V7qx/XOx1jm4Vl8ZgzoDXeVvlIa9S+7pLGEB5UsDMdOvA"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>  


