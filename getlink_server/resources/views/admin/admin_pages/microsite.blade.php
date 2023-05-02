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
    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th style="border-radius: 10px 0 0 0">No</th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Template</th>
                    <th>Kategori</th>
                    <th  style="border-radius: 0 10px 0 0 ">Link</th>
                </tr>
            </thead>
        </table>
    </div>


    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
$(function() {
    $('#users-table').DataTable({
        ajax: "{{ route('getdatamicrosite') }}",
        columns: [
            {
                data: 'id',
                orderable: false, // Menonaktifkan pengurutan untuk kolom ini
                render: function(data, type, row, meta) {
                    // Mengembalikan nomor urut berdasarkan nomor indeks
                    return meta.row + 1;
                },
            },
            {
                data: 'user_name', // Kolom yang merepresentasikan nama pengguna dari tabel 'users'
            },
            {
                data: 'microsite_name', // Kolom yang merepresentasikan nama dari tabel 'microsites'
            },
            {
                data: 'template_name', // Kolom yang merepresentasikan nama dari tabel 'templates'
            },
            {
                data: 'kategori_name',
            },
            {
                data: 'link',
                render: function(data, type, row) {
                        return '<a href="/-'+data+'" style="color:indigo"><i class="fas fa-link"></i></a>';
                }
            },
        ],
    });
});


    </script>
@endsection
