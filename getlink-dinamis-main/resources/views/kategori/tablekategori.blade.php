@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('tabelkategori') }}
     <h1> kategori</h1>

     <div class="row">
      <div class="col-lg-8"> 
          <a href="{{ url('create_kategori') }}" class="btn btn-primary">+ kategori</a>
      </div>
    
    <div class="table-responsive mt-3">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>no</th>
              <th>gambar</th>
              <th>kategori</th>
              <th>warna button</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1?>
             @foreach ($data as $item)
            <tr>
              <td>{{ $no++ }}</td>
              <td> <img class="bg-primary mx-3" style="border-radius:10px " src="{{ url('uploads').'/'.$item->icon }}" width="50px" height="50px" alt=""></td>
              <td>{{$item->title }}</td>
              <td><button class="btn" style="background-color: {{ $item->color }}"></button></td>
              
              <td>
                <a href="{{ url('/show_update/'. $item->id)}}" class="btn btn-warning" >edit</a> 
                <a  onclick="return confirm('Apakah anda yakin inggin menghapus?')" href="{{ url('/destroy/'. $item->id)}}" class="btn btn-danger" -id="{{ $item->no }}" >hapus</a>
              </td>
      
              
            </tr>
            @endforeach
            <?php $no++ ?>
         </tbody>
        </table>
      </div>
      
    
</body>
</html> 
@endsection

