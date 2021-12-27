{{-- Dashboard area --}}
<li class="menu-header">Dashboard</li>
<li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-link"></i>URL Management</a></li>
        <li><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-ban"></i>URL Blocked</a></li>
    </ul>
</li>

{{-- API area --}}
<li class="menu-header">API</li>
<li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-rocket"></i><span>API</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html"><i class="fas fa-key"></i>API Key</a></li>
        <li><a class="nav-link" href="index-0.html"><i class="fas fa-book"></i>Docs</a></li>
    </ul>
</li>
{{-- Profile area --}}
<li class="menu-header">Account</li>
<li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-circle"></i><span>Account</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html"><i class="fas fa-user-cog"></i>Profile</a></li>
        <li><a class="nav-link" href="index-0.html"><i class="fas fa-wrench"></i>Change Password</a></li>
    </ul>
</li>

{{-- Admin area --}}
<li class="menu-header">Administrator</li>
<li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Administrator</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="index-0.html"><i class="fas fa-fire"></i>URL Management</a></li>
        <li><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users"></i>User
                Management</a></li>
        <li><a class="nav-link" href="index.html"><i class="fas fa-cogs"></i>Site Settings</a></li>
    </ul>
</li>
