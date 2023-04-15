@extends('admin.layout.base')

@section('admin_konten')

    {{-- <div class="adMicro">
        <div class="microTop">
            <button id="micDrop" class="microDrop">
                Semua
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="micDropdown">
                <button class="micIsi">
                    10
                </button>
                <button class="micIsi">
                    25
                </button>
                <button class="micIsi">
                    50
                </button>
                <button class="micIsi">
                    100
                </button>
            </div>
            <div class="microCari">
                <input type="search" name="Search" id="Search" class="micSearch"> <i
                    class="fa-solid fa-magnifying-glass search_icon"></i>
            </div>
        </div>
        <div class="microTable">
            <table class="micTab" border="0">
                <thead>
                    <tr>
                        <th class="mictop">
                            <div class="hhead">
                                Id
                                <div class="upandown">
                                    <i class="fa-solid fa-chevron-up"></i>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </th>
                        <th class="mictop">
                            <div class="hhead">
                                Id User
                                <div class="upandown">
                                    <i class="fa-solid fa-chevron-up"></i>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </th>
                        <th class="mictop">
                            <div class="hhead">
                                Title
                                <div class="upandown">
                                    <i class="fa-solid fa-chevron-up"></i>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </th>
                        <th class="mictop">
                            <div class="hhead">
                                Id template
                                <div class="upandown">
                                    <i class="fa-solid fa-chevron-up"></i>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </th>
                        <th class="mictop">
                            <div class="hhead">
                                Id kategori
                                <div class="upandown">
                                    <i class="fa-solid fa-chevron-up"></i>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Test</td>
                        <td>2</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="microPaginate">
            <button class="preNex">Previous</button>
            <button class="microbtn">1</button>
            <button class="microbtn">2</button>
            <button class="preNex">Next</button>
        </div>
    </div> --}}

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

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.js') }}"></script>
    <script>
        $(function() {
            $('#users-table').DataTable({

                // table
                // .search(inputValue)
                // .draw();

                // $('#myTable_filter input[type="search"]').addClass('my-custom-search-class');

                // processing: true,
                // serverSide: true,
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
