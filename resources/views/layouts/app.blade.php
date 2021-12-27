<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('partials.head')

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('partials.navbar')
            @include('partials.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @include('partials.header_page')
                    <div class="section-body">
                        @include('partials.alert')
                        @yield('container')
                    </div>
                </section>
            </div>
            @include('partials.modals')
            @include('partials.footer')
        </div>
    </div>
    @include('partials.scripts')
</body>

</html>
