<!--==================== HEADER ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
           
            <img src="{{asset('frontend/images/logo.png')}}" class="nav__logo-img" alt="">
           
                {{ config('app.name', 'Laravel') }}
            
        </a>
        
       
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">Home</a>
                </li>

                <li class="nav__item">
                    <a href="#about" class="nav__link">About</a>
                </li>

                <li class="nav__item">
                    <a href="#trick" class="nav__link">Candy</a>
                </li>

                <li class="nav__item">
                    <a href="#new" class="nav__link">New</a>
                </li>
            
               

                <a href="#" class="button button--ghost">Support</a>
                <li class="user_info_item">
                    @guest
                       
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    
                        @if (Route::has('register'))
                            
                                <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a style="color:#fff;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
            
            </li>
            </ul>

            <div class="nav__close" id="nav-close">
                <i class='bx bx-x'></i>
            </div>

            <img src="frontend/images/nav-img.png" alt="" class="nav__img">
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-grid-alt'></i>
        </div>

    </nav>
</header>