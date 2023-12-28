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
        <!-- <nav>
            <a wire:navigate href="/" @class(['current' => request()->is('/')])>Todos</a>
            <a wire:navigate href="/posts"  @class(['current' => request()->is('posts')])>Posts</a>
            <a wire:navigate href="/create-post"  @class(['current' => request()->is('create-post')])>Create post</a>
        </nav> -->
        <main class="flex justify-center items-start py-16 bg-slate-100 min-h-screen text-slate-800">
        {{ $slot }}
        </main>
    </body>
</html>
