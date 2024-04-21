<!DOCTYPE html>
<html lang="{{ str_replace('_','_',app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>
    @vite("resources/css/app.css")
</head>

<body class="antialiased bg-gray-900 text-gray-100">
    <div class="max-w-md mx-auto px-4 py-6">
        {{$slot}}
    </div>
</body>

</html>