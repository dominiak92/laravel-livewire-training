<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='/app.css'>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <a href="/" @class(['current' => request()->is('/')])>Todos</a>
            <a href="/posts"  @class(['current' => request()->is('posts')])>Posts</a>
            <a href="/create-post"  @class(['current' => request()->is('create-post')])>Create post</a>
        </nav>
        {{ $slot }}
    </body>
</html>
