<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
</head>

<body class='max-w-3xl m-auto p-3 dark:bg-gray-900'>
    {{ $slot }}
</body>

</html>
