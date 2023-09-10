<header class="header-default">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xl">
                <!-- site logo -->
                <a class="navbar-brand" href="{{route('main-page')}}"><h4>{{optional($settings)->logo}}</h4></a>

                <div class="collapse navbar-collapse">
                    <!-- menus -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item  {{Route::is('main-page') ? 'active' : ''}}">
                            <a class="nav-link" href="{{url('/')}}">صفحه اصلی</a>
                        </li>
                        <li class="nav-item {{Route::is('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="{{route('contact')}}">تماس با ما</a>
                        </li>
                        <li class="nav-item {{Route::is('about') ? 'active' : ''}}">
                            <a class="nav-link" href="{{route('about')}}">درباره ما</a>
                        </li>
                    </ul>
                </div>

                <!-- header right section -->
                <div class="header-right">
                    <!-- social icons -->
                    <!-- header buttons -->
                    <div class="header-buttons">
                        <button class="search icon-button">
                            <i class="icon-magnifier"></i>
                        </button>
                        <button class="burger-menu icon-button">
                            <span class="burger-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

