<h1>List Addresses</h1>
<table>
    <thead>
        <tr>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Detail Lain</th>
        </tr>
    </thead>
    <tbody>
        @foreach($address as $address)
            <tr>
                <td>{{ $address->no_telpon }}</td>
                <td>{{ $address->alamat }}</td>
                <td>{{ $address->detail_lain }}</td>
                <td>
                    <a href="/address/{{ $address->id }}/edit">Edit</a>
                    <form action="/address/{{ $address->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="/address/create">Create</a>
