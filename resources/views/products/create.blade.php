<h1>Create Product</h1>
<form action="/products" method="POST">
    @csrf
    Name: <input type="text" name="name"><br>
    Price: <input type="number" name="price"><br>
    Image URL: <input type="text" name="image_url"><br>

    <input type="submit" value="save">
</form>