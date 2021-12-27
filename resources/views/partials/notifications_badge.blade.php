@if (config('stisla.navbar.notifications_badge'))
    <li class="dropdown dropdown-list-toggle">
        <a href="#" data-toggle="dropdown" class="nav-link notification-toggle beep nav-link-lg"><i
                class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Notifications
                <div class="float-right">
                    <a href="#">Mark All As Read</a>
                </div>
            </div>
            <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="dropdown-item-desc">
                        Template update is available now!
                        <div class="time text-primary">2 Min Ago</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="dropdown-item-desc">
                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                        <div class="time">10 Hours Ago</div>
                    </div>
                </a>
            </div>
            <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </li>
@endif
