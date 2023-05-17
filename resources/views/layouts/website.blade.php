<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.style')
</head>
<body>
    @include('includes.navbar')
    <div class="container py-3">
        <div class="rounded p-3 bg-white">
            @yield('content')
        </div>
    </div>
    @include('includes.script')
</body>
</html>