@extends('admin.layout.base')

@section('admin_konten')
    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="border-radius: 0 10px 0 0 ">Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="{{asset('DataTables/datatables.min.js')}}"></script> 
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
        $(function() {
    $('#users-table').DataTable({
        ajax: {
            url: "{{ route('getdata_akun') }}",
        },
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'role',
                name: 'role'
            },
                { data: null, render: function ( data, type, row, meta ) {
                    return '<button id="detail-'+row.id+'" class="detail-btn"><i class="fa-solid fa-eye" onclick="showUserDetail(' + row.id + ')"></i></button>'; // tambahkan tombol detail dengan id tertentu
                }
            }
        ]
    });
});



function showUserDetail(id) {
        $.ajax({
            url: '/users/' + id, // ganti dengan URL endpoint untuk mengambil detail akun
            type: 'GET',
            success: function(response) {
                $('#user-details').html(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    </script>


    <div class="adMicro">
        <table id="users-table-user" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="border-radius: 0 10px 0 0 ">Role</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="{{asset('DataTables/datatables.min.js')}}"></script> 
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
        $(function() {
    $('#users-table-user').DataTable({
        ajax: {
            url: "{{ route('getdata_akun_user') }}",
        },
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'role',
                name: 'role'
            },
        ]
    });
});

    </script>
@endsection
