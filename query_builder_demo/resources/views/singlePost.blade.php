<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Post Data</title>
</head>

<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <img src="{{ $post->url }}" alt="" height="100" width="200">
    <p>Post Likes : {{ $post->likes }}</p>
    <p>Publisher Name : {{ $post->post_by }}</p>
    <a href="{{ route('post.index') }}">Go To Post List</a>
</body>

</html>
