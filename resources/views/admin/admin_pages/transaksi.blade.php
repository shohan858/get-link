@extends('admin.layout.base')

@section('admin_konten')
    <style type="text/css">
        .paginate_button {
            border-radius: 10px;
            background-color: #fff !important;
            /* ubah warna latar belakang sesuai keinginan */
            border: 1px solid #A5A5A5 !important;
            /* hilangkan garis pembatas jika tidak dibutuhkan */
        }

        .paginate_button.current {
            background-color: #A5A5A5 !important;
            color: #fff !important;
        }

        .pagination .active a {
            background-color: #A5A5A5;
            /* ubah warna latar belakang tombol aktif */
            color: #fff !important;
            /* ubah warna teks tombol aktif */
        }

        .pagination a {
            color: #007bff;
            /* ubah warna teks tombol */
        }

        .paginate_button:hover {
            background-color: #A5A5A5 !important;
            /* ubah warna latar belakang tombol saat dihover */
            color: #fff !important;
            /* ubah warna teks tombol saat dihover */
        }
    </style>

    <div class="adtemp">
        <table id="users-table" class="table table-striped table-bordered" style=" width: 100%;">
            <thead style="position: sticky; top: 0;">
                <tr>
                    <th style="border-radius: 10px 0 0 0;">No</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Payment Gateway</th>
                    <th>Jumlah</th>
                    <th>Referensi</th>
                    <th>Status Penyelesaian</th>
                    <th style="border-radius: 0 10px 0 0;">Tanggal dibuat</th>
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
                        data: 'status',
                        render: function(data, type, full, meta) {
                            var statusColor = data == 'PAID' ? '#40d236' : '#ff8201';
                            return '<div style="background-color: ' + statusColor +
                                '; border-radius: 10px; width: 86px; height: 30px; display: flex; align-items:center; justify-content:center; font-family: \'Lato\'; font-style: normal; font-weight: 500; font-size: 15px; line-height: 18px; color: #FFFFFF;">' +
                                data + '</div>';
                        }

                    },
                    {
                        data: 'payment_gateway',
                    },
                    {
                        data: 'total'
                    },
                    {
                        data: 'external_id'
                    },
                    {
                        data: 'status',
                        render: function(data, type, full, meta) {
                            var statusColor = data == 'PAID' ? '#40d236' : '#ff8201';
                            return '<div style="background-color: ' + statusColor +
                                '; border-radius: 10px; width: 86px; height: 30px; display: flex; align-items:center; justify-content:center; font-family: \'Lato\'; font-style: normal; font-weight: 500; font-size: 15px; line-height: 18px; color: #FFFFFF;">' +
                                data + '</div>';
                        }
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
