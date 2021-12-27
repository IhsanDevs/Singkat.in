@php
$user = Auth::user();
@endphp
<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="https://ui-avatars.com/api/?background=97A6FC&color=fff&name={{ $user->name }}"
            class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, {{ $user->name }}</div>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
        <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
        </a>
        <a href="features-activities.html" class="dropdown-item has-icon">
            <i class="fas fa-bolt"></i> Activities
        </a>
        <a href="features-settings.html" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i> Settings
        </a>
        <div class="dropdown-divider"></div>
        <a href="javascript:void()" onclick="$('#logout-form').submit();" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
