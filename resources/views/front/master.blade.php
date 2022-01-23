<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fashion Hub | @yield('title')</title>
        @include('front.includes.meta')
        @include('front.includes.style')
    </head>
    <body>
        @include('front.includes.header')
        @yield('body')
        @include('front.includes.footer')
        @include('front.includes.script')
    </body>
</html>