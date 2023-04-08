@extends('admin.base')
@section('konten')
    <h1>Edit Template {{ $template->title }}</h1>
    <form method="POST" action="/update_template/{{ $template->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="namaKategori">Title</label>
            <input type="text" class="form-control" value="{{ $template->title }}" id="namaKategori" name="title" required>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="warnaKategori">Kategori</label>
                <select class="form-control" id="warnaKategori" name="id_kategori" required>
                    @foreach ($kategori as $kategoris)
                        <option value="{{ $kategoris->id }}"
                            {{ old('kategori', $data_kategori->id) == $kategoris->id ? 'selected' : null }}>
                            {{ $kategoris->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Komponen">Komponen</label>
            @foreach ($komponen as $komponens)
                <div class="form-check">
                    <input class="form-check-input" name="id_komponen[]" type="checkbox" value="{{ $komponens->id }}"
                        {{ old('komponen', $template->id_komponen) == $komponens->id ? 'checked' : null }}
                        id="option{{ $komponens->id }}">
                    <label class="form-check-label"
                        {{ old('komponen', $template->id) == $komponens->id ? 'checked' : null }}
                        for="option{{ $komponens->id }}">
                        {{ $komponens->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label for="namaKategori">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ url('gambar/' . $template->image) }}" width="100px" alt="">
        </div>
        <div class="form-group">
            <label for="type">Type Background</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_background" id="exampleRadios1" value="color"
                    {{ $template->type_background == 'color' ? 'checked' : '' }} onclick="showColorInput()">
                <label class="form-check-label" for="exampleRadios1">
                    Color
                </label>
                <div id="colorInput" style="display:none;">
                    <label for="color">Background Color</label>
                    <input type="color" value="{{ $template->background }}" name="background" id="color"
                        class="form-control">
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_background" id="exampleRadios2" value="image"
                    {{ $template->type_background == 'image' ? 'checked' : '' }} onclick="showImageInput()">
                <label class="form-check-label" for="exampleRadios2">
                    Image
                </label>
                <div id="imageInput" style="display:none;">
                    <label for="image">Background Image</label>
                    <input type="file" class="form-control" name="background" id="image">
                    <img src="{{ url('gambar/' . $template->background) }}" width="100px" alt="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <script>
        function showColorInput() {
            document.getElementById("colorInput").style.display = "block";
            document.getElementById("imageInput").style.display = "none";
        }

        function showImageInput() {
            document.getElementById("colorInput").style.display = "none";
            document.getElementById("imageInput").style.display = "block";
        }
    </script>
@endsection
