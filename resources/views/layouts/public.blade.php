<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    {{-- includo header  --}}
    @include('partials.header')
    <main>
        @include('partials.hero')
        @include('partials.cardList')
        @include('partials.banner')
        @yield('content')

    </main>
    {{-- includo footer  --}}
    @include('partials.footer')
</body>

</html>
