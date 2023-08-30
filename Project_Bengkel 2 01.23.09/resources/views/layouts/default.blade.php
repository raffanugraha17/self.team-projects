<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div>
        <head>
            @include('includes.navbar')
        </head>
        <div>
            @yield('content')
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>