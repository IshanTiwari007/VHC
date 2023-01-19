<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template.layouts.head')
</head>
<body>
    @include('Template.layouts.header')

        @yield('content')

    @include('Template.layouts.footer')
</body>
</html>