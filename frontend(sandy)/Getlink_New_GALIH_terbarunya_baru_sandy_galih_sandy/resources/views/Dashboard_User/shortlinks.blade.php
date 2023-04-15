<?php $no = 1?>
<a href="shortlink_create">buat shortlink</a><br>
@foreach ($data as $item)
    {{ $no }} = {{$item->code }}
    <a href="{{ url('shortlink/' . $item->id) }}">edit</a>
    <form action="{{ url('shortlink_delete/' . $item->id) }}" method="POST">
        @csrf
        @method('delete')
        <button>delete</button>
    </form>
    <?php $no++ ?>
@endforeach