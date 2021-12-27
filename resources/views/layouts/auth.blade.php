<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                @yield('container')
                @include('partials.scripts')
            </div>
        </section>
    </div>
</body>

</html>
