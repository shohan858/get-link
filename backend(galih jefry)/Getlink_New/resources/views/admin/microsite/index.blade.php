@extends('admin.base')
@section('konten')

<style type="text/css">
    table.dataTable th {
   font-weight: bold;
   background-color: rgb(102, 102, 237);
   color: aliceblue
}
table.dataTable tbody tr:nth-child(even) {
   background-color: #f2f2f2;
}
table.dataTable {
   border-collapse: collapse;
   border-spacing: 0;
   border: 1px solid #ddd;
}
</style>
 
<h1 class="mb-5">Daftar Microsite User</h1>

<div class="">
    <table id="getdata">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id User</th>
                <th>Title</th>
                <th>Id Template</th>
                <th>Id Kategori</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    

    $(document).ready(function() {
        $('#getdata').DataTable({
            ajax:"{{ route('getdatamicrosite') }}",
            columns: [
                {data:'id'},
                {data:'id_user'},
                {data:'name'},
                {data:'id_template'},
                {data:'id_kategori'},
            ]
        })
    })

    // // function callApi(){
    // //     $.ajax({
    // //         url:"{{ url('api/coba') }}",
    // //         method:'GET',
    // //         success: function(data){
    // //             $('table tbody').html('')
    // //             data.forEach(function(item, $microsite){
    // //                 $("table tbody").append(`
    // //                     <tr>
    // //                         <td>${index+1}</td>
    // //                         <td>${item.title}</td>
    // //                     </tr>    
    // //                 `)
    // //             })
    // //         },
    // //         error:function(err){
    // //             alert(err)
    // //         }
    // //     })
    // }

</script>

@endsection