<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #f4f4f9;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div>
    <h1>Edit a product</h1>
        <form action="{{route('product.update',['product'=>$product])}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name"value="{{$product->name}}" />
            </div>
            <div>
                <label>Quantity</label>
                <input type="text" name="qty" placeholder="Quantity"value="{{$product->qty}}" />
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price" placeholder="Price"value="{{$product->price}}" />
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="Description"value="{{$product->description}}" />
            </div>
            <div>
                <input type="submit" value="Update a Product">
            </div>
        </form>

    </div>

</body>
</html>
