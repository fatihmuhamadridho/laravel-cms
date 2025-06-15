<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Import Tailwind -->
    @include('layouts.tailwind')
</head>

<body>
    <x-navbar />
    <main>
        {{ $slot }}
    </main>
</body>

</html>