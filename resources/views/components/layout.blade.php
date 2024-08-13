@props(['title'])
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Pixelify+Sans:wght@400..700&display=swap"
          rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col items-center     min-h-screen">
<x-nav-bar></x-nav-bar>
{{$slot}}
</body>
</html>
