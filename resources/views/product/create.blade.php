<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Products</h1>

    <form action="{{route('product.store')}}" method="POST">
        @csrf
        @method('post')

        <div>
            <label for="name">Name :</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="quantity">Quantity :</label>
            <input type="text" name="quantity">
        </div>
        <div>
            <label for="price">Price :</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="description">Description :</label>
            <input type="text" name="description">
        </div>

        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>