            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        @if (config('stisla.navbar.search_form'))
                            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                        class="fas fa-search"></i></a></li>
                        @endif
                    </ul>
                    @if (config('stisla.navbar.search_form'))
                        <div class="search-element">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                data-width="250">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    @endif
                </div>
                <ul class="navbar-nav navbar-right">
                    @include('partials.messages_badge')
                    @include('partials.notifications_badge')
                    @include('partials.profile_dropdown')
                </ul>
            </nav>
