@extends('admin.layout.base')

@section('admin_konten')

    <div class="adMicro">
        <table id="users-table" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th style="border-radius: 10px 0 0 0">Id</th>
                    <th>Id User</th>
                    <th>Title</th>
                    <th>Id Template</th>
                    <th style="border-radius: 0 10px 0 0 ">Id Category</th>
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
                columns: [{
                        data: 'id',
                    },
                    {
                        data: 'id_user',
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'id_template',
                    },
                    {
                        data: 'id_kategori',
                    },

                ]
            });
        });
    </script>
@endsection
