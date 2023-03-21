@extends('admin.base')
@section('konten')
<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h3 mb-0 text-gray-800">Komentar</h1>
</div>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->id_user }}</td>
                    <td>{{ $item->komentar }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <form action="{{ url('comment_hide') . '/' . $item->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-info btn-sm">hide</button>
                        </form>
                        <form action="{{ url('comment_show') . '/' . $item->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-info btn-sm">show</button>
                        </form>
                    </td>
                </tr>
                <?php $no++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection