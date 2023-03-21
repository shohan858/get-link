@extends('admin.base')
@section('konten')
<table class="table">
    <thead class="text-center">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Username</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php $no = 1?>
        @foreach ($data as $item)
        <tr>
          <th scope="row">{{ $no }}</th>
          <td>{{ $item->name }}</td>
          <td>
            @foreach ($data2 as $item2)
              @if ($item->role_id == $item2->id)
                {{ $item2->name }}
              @endif
            @endforeach
          </td>
          </td>
        </tr>
        <?php $no++ ?>
        @endforeach
    </tbody>
  </table>
@endsection