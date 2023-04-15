@extends('admin.layout.base')

@section('admin_konten')
    <div class="adtemp">
        <table id="users-table" class="table table-striped table-bordered" style=" width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Payment Gateway</th>
                    <th>Jumlah</th>
                    <th>Referensi</th>
                    <th>Status Penyelesaian</th>
                    <th>Tanggal dibuat</th>
                </tr>
            </thead>
        </table>
    </div>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
        $(function() {
            $('#users-table').DataTable({
                // searchClass: 'my-custom-search-class',
                // table
                // .search(inputValue)
                // .draw();

                // $('#myTable_filter input[type="search"]').addClass('my-custom-search-class');

                // processing: true,
                // serverSide: true,
                ajax: "{{ route('getdata_template') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'id_kategori'
                    },
                    {
                        data: 'id_komponen'
                    },
                    {
                        data: 'image',
                        render: function(data, type, full, meta) {
                            return '<img src="/microsite/template_image/' + data +
                                '" width="100" height="100">';
                        }
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'background',
                        type: 'type_background',
                        render: function(data, type, full, meta) {
                            if (type === 'display') {
                                if (full.type_background === 'image') {
                                    return '<img src="/microsite/background/' + data +
                                        '" width="100" height="100">';
                                } else if (full.type_background === 'color') {
                                    return '<div style="background-color:' + data +
                                        '; width:50px; height:50px;"></div>';
                                }
                            }
                            return data;
                        }
                    },
                    {
                        data: 'type_background',
                    },
                    {
                        data: 'id',
                        title: 'Aksi',
                        render: function(data, type, full, meta) {
                            return '<button class="katHap" data-id="' + data +
                                '" data-nama="' + full.title +
                                '" onclick="deleteKategori(this)"><i class="fa-solid fa-trash" style="color:#fff;cursor: pointer;"></i></button>'
                            // +
                            // '<a href="/edit_template/'+data+'" class="btn btn-warning btn-sm mx-1">Update</a>';
                        }
                    },
                ]
            });
        });

        function deleteKategori(button) {
            var id = $(button).data('id');
            var nama = $(button).data('nama');

            if (confirm("Apakah Anda yakin ingin menghapus kategori " + nama + "?")) {
                $.ajax({
                    url: "{{ url('template') }}/" + id,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(result) {
                        // alert(result.message);
                        $('#users_table').DataTable().ajax.reload();

                    },
                    error: function(xhr, status, error) {
                        // alert(xhr.responseText);
                        $('#users-table').DataTable().ajax.reload();
                        swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Hapus Link',
                            timer: '900',
                        });
                    }

                });
            }
        }
    </script>
@endsection
