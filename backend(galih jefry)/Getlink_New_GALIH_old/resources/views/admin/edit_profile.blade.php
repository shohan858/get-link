<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit profile</title>

</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="edit" action="{{ url('profile/update') . '/' . Auth::user()->id }}" method="POST" enctype="multipart/form-data">
        @method("put")
        @csrf
        <h1>edit profile</h1>
        <img src="{{ asset('images') . '/' . $user->img }}" alt="image">
        <input type="text" name="username" value="{{ $user->name }}">
        <input id="email" type="email" name="email" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="ubah password (masukan password baru)">
        <input type="password" name="confirm_password" placeholder="masukan kembali password ">
        <input type="file" name="image">
        <button type="submit">Simpan</button>
        
    </form>
    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus Akun</button>
    </form>


</body>
</html>