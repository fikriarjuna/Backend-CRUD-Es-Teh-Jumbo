<h1>Edit Address</h1>
<form action="/address/{{$address->id}}" method="POST">
    @method('PUT')
    @csrf
    No Telepon: <input type="text" name="no_telpon" value="{{$address->no_telpon}}" required><br>
    Alamat: <input type="text" name="alamat" value="{{$address->alamat}}" required><br>
    Detail Lain: <input type="text" name="detail_lain" value="{{$address->detail_lain}}"><br>

    <input type="submit" value="Save">
</form>
