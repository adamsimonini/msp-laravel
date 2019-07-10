<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MSP Program') }}@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="/images/favicon.ico">
</head>
<body>  
    <div id="app" class="container">
        <div class="top-bar">
            <div>Call us at (123) 456-7891</div>
            <div><a href="#">get driving directions</a></div>
        </div>            
        <header>
            <a href="/"><img src="/images/logo.png"></a>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="separator"></li>
                    <li><a href="#">About</a></li>
                    <li class="separator"></li>
                    <li><a href="/menu">Menu</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Reservations</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Location &amp; Hours</a></li>
                    <li class="separator"></li>
                    <li><a href="#">Contact</a></li>
                    <li class="separator"></li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="">
                            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="separator"></li>
                        @if (Route::has('register'))
                            <li class="">
                                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="">
                            <!-- display account name -->
                            <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a> -->
                            <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            <!-- </div> -->
                        </li>
                    @endguest
                </ul>
            </nav>
        </header>  
        <main class="page-content">
            @yield('content')
        </main>    
        <footer>
            NADIA’S GARDEN RESTAURANT IS A FICTITIOUS BRAND CREATED BY LYNDA.COM SOLELY FOR THE PURPOSE OF TRAINING.
            ALL PRODUCTS AND PEOPLE ASSOCIATED WITH NADIA’S GARDEN RESTAURANT ARE ALSO FICTITIOUS.
            ANY RESEMBLANCE TO REAL BRANDS, PRODUCTS, OR PEOPLE IS PURELY COINCIDENTAL. 
            INFORMATION PROVIDED ABOUT THE PRODUCT IS ALSO FICTITIOUS AND SHOULD NOT BE CONSTRUED TO BE REPRESENTATIVE 
            OF ACTUAL PRODUCTS ON THE MARKET IN A SIMILAR PRODUCT CATEGORY.
        </footer>   
    </div>
</body>
</html>
