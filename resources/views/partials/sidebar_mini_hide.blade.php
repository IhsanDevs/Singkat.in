@if (config('stisla.sidebar_mini.show'))
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ config('stisla.sidebar_mini.link') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="{{ config('stisla.sidebar_mini.icon') }}"></i> {{ config('stisla.sidebar_mini.label') }}
        </a>
    </div>
@endif
