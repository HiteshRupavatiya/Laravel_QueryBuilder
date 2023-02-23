<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts Data</title>
    <style>
        table {
            padding: 10px;
        }

        td,
        th {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1 align="center">Posts</h1>
    <table border="1" align="center">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Likes</th>
            <th>Publisher</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>
                    <a href="{{ $post->url }}" target="blank">
                        View Post Image
                    </a>
                </td>
                <td>{{ $post->likes }}</td>
                <td>{{ $post->post_by }}</td>
                <td>
                    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="7" align="center">
                <form action="{{ route('post.create') }}" method="get">
                    <input type="submit" value="Create Post" align="center">
                </form>
            </td>
        </tr>
    </table>
</body>

</html>
