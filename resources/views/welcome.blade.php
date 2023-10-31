<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            .content{
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="content">
            <h1>@lang('Hello!')</h1>
        </div>
    </body>
</html>
