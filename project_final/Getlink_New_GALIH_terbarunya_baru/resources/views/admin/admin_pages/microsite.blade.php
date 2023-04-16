@extends('admin.layout.base')

@section('admin_konten')
{{-- <style type="text/css">
    .paginate_button {
        /* background-color: #fff !important;  */
        border: 2px solid grey !important; 
        border-radius:10px !important; 
    }
    .previous:hover{
        color: #FFF !important;
    }
    .paginate_button.current {
      background-color: grey !important;
      color: #fff !important;
    }
    
    .pagination .active a {
        background-color: grey; 
        color: #fff !important; 
    }
    .pagination a {
        color: #FFF;
    }
    .paginate_button:hover {
        background-color: grey !important;
        color: #fff !important; 
    }
    
    
    </style> --}}
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
                        return '<a href="/microsite/'+data+'" style="color:indigo"><i class="fas fa-link"></i></a>';
                }
            },
        ],
    });
});


    </script>
@endsection
