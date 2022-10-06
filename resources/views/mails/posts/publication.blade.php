<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>E' stato pubblicato un post</h1>
    <h2>{{ $post->title }}</h2>
    <p><strong>Data di pubblicazione: </strong>{{ $post->created_at }}</p>
    <address>{{ $post->author->name }}</address>
    <p><strong>Categoria: </strong>{{ $post->category ? $post->category->label : 'Nessuna' }}</p>
    <p><strong>Tags: </strong></p>
    @forelse ($post->tags as $tag)
        <div>{{ $tag->label}}</div>
    @empty
        Nessuno
    @endforelse
</body>
</html>