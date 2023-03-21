@extends('admin.base')
@section('konten')
<div class="d-sm-flex align-items-center justify-content-between mb-1">
    <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
</div>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id_user</th>
                    <th>Type</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->id_user }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->total }}</td>
                    <td>
                        <a href="{{ '/transaksi/'. $item->id }}" class="btn btn-info btn-sm">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection