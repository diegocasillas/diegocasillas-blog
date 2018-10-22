<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <body>
        @include('partials.nav')

        @yield('header')

        <main class="container mt-5 mb-5">
            @yield('main')
        </main>

        @include('partials.footer')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
