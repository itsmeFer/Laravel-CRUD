<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>List Product</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="/{{$product->id}}/edit">Edit</a>
                        <form action="/{{$product->id}}" method="POST">
                        @method('DELETE') 
                        @csrf
                        <input type="submit" value="Delete"> 
                    </form>
                        
                    </td>
                </tr>
            @endforeach
            
          
        </tbody>
      <a href="/create">Create</a>
    </table>
</body>
</html>
