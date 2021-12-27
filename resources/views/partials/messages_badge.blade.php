@if (config('stisla.navbar.messages_badge'))
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
            class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Messages
                <div class="float-right">
                    <a href="#">Mark All As Read</a>
                </div>
            </div>
            <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle">
                        <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Kusnaedi</b>
                        <p>Hello, Bro!</p>
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
