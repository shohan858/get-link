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
                ajax: "{{ route('getdata_transaksi') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'id_user'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'payment_gateway',
                        // render: function(data, type, full, meta) {\
                        //     return '<img src="/microsite/template_image/' + data +
                        //         '" width="100" height="100">';
                        // }
                    },
                    {
                        data: 'total'
                    },
                    {
                        data: 'external_id'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'created_at',
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
