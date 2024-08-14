<h1>List product</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product -> name}}</td>
                <td>{{$product -> price}}</td>
                <td>{{$product -> image_url}}</td>
                <td>
                    <a href="/products/{{$product->id}}/edit">Edit</a>
                    <form action="/products/{{$product->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

    <a href="products/create">Create</a>
</table>