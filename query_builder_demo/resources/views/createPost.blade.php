<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
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
    <h1 align="center">Create Post</h1>
        @if (Session::has('error'))
            <p align="center" style="color: red">
                {{Session::get('error')}}
            </p>
        @endif
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <table align="center" border="1">
            <tr>
                <td>
                    <label for="">Post Title :</label>
                    <input type="text" name="title" id="" autofocus placeholder="Title">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Post Description :</label>
                    <textarea name="description" id="" cols="16" rows="4" autofocus placeholder="Description"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Publisher Name :</label>
                    <input type="text" name="post_by" id="" autofocus placeholder="Name">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" value="Create">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
