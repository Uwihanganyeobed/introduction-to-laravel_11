<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }

        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #5c67f2;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #4a54e1;
        }
    </style>
</head>
<body>
    <h1>Create Posts Page</h1>
    <form action="{{route('post.update',['post'=>$post])}}" method="POST">
        <div>
            @if (session()->has('session')){
                <div>
                    {{session('session')}}
                </div>
            }            
            @endif
        </div>
        @csrf
        @method('PUT')
        <label for="title">Add Post Title:</label>
        <input type="text" id="title" name="title"value="{{$post->title}}" />
        
        <label for="body">Add Post Body:</label>
        <input type="text" id="body" name="body" value="{{$post->body}}" />
        
        <input type="submit" value="Edit a Post" />
    </form>
</body>
</html>
