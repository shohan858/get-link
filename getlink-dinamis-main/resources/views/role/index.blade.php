@extends('admin.base')
@section('konten')
{{ Breadcrumbs::render('role') }}
    <a href="role/create" class="btn btn-primary">Create Role</a>
    <table class="table">
        <thead class="text-center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php $no = 1?>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $no }}</th>
            <td>{{ $item->name }}</td>
            <td><a href="role/{{ $item->id }}" class="btn btn-primary">Edit</a>
              <form class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapus Data ???')" action="{{ url('role') . '/' . $item->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          <?php $no++ ?>
          @endforeach
        </tbody>
      </table>
@endsection