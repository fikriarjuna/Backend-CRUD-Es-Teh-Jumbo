<h1>Create Address</h1>
<form action="/address" method="POST">
    @csrf
    No Telepon: <input type="text" name="no_telpon" required><br>
    Alamat: <input type="text" name="alamat" required><br>
    Detail Lain: <input type="text" name="detail_lain"><br>

    <input type="submit" value="Save">
</form>
