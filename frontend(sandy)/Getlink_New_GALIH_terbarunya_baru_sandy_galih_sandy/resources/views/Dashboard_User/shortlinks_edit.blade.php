<form action=" {{ url('shortlinks_update/' . $data->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" value="{{ $data->code }}" disabled>
    <input type="text" value="{{ $data->link }}" name="link">
    <button>Update</button>
</form>