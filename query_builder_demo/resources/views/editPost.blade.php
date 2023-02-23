<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <style>
        table {
            padding: 10px;
        }

        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('put')
        <table align="center" border="1">
            <tr>
                <td>
                    <label for="">Post Title :</label>
                    <input type="text" name="title" id="" autofocus value="{{ $post->title }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Post Description :</label>
                    <textarea name="description" id="" cols="16" rows="4">{{ $post->description }}</textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Publisher Name :</label>
                    <input type="text" name="post_by" id="" autofocus value="{{ $post->post_by }}"
                        autofocus>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" value="Update">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
