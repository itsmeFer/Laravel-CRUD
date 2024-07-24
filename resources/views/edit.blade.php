<h1>Edit Product</h1>

<form action="/{{$product->id}}" method="POST">
    @csrf

    @method('PUT')
   

    Name : <input type="text" name="name" value="{{$product->name}}"><br>
    Description : <input type="text" name="description" value="{{$product->description}}"><br>
    Price : <input type="number" name="price" value="{{$product->price}}"><br>
    Image Url : <input type="text" name="image_url" value="{{$product->image_url}}"><br>

    <input type="submit" value="Save">

</form>