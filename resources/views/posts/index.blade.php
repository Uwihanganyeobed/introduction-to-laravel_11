<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page - Posts</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5c67f2;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>This is the Index Page Table of Posts</h1>
    <div>
        @if (session()->has('session')){
            <div>
                {{session('session')}}
            </div>
        }
            
        @endif
    </div>
    <div>
        <a href="{{route('post.create')}}">Create a new Post</a>
    </div>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td><a href="{{route('post.edit',['post'=>$post])}}">Edit</a></td>
            <td>
                <form action="{{route('post.destroy',['post'=>$post])}}"method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit"value="Delete Post">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
