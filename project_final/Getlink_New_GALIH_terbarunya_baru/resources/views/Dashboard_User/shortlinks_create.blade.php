<form action="generate-shorten-link" method="POST">
    @csrf
    <input type="text" name="link" required>
    <button>buat</button>
</form>