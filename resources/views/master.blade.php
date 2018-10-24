<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

    <body>
        @include('partials.nav')

        <div class="container">
            @yield('header')

            <main class="mt-5 mb-5">
                @yield('main')
            </main>
        </div>

        @include('partials.footer')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
