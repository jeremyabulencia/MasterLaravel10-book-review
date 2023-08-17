<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <style type="text/tailwindcss">
        p {
            @apply block px-4 py-3
        }
        .descriptionTxt {
            @apply block text-slate-700 text-sm px-2 py-3
        }
        .commandTxt {
            @apply block border border-gray-400 bg-gray-200 text-sm px-2 py-3
        }
    </style>
</head>
<body class="container mx-auto mt-10 mb-10 max-w-4xl">
    <h1 class="mb-4 text-2xl">@yield('title')</h1>
    <div class="rounded-md border border-gray-400 px-4 py-3 shadow-sm">
        @yield('content')
    </div>
</body>
</html>