<?php
    /**
     * navbar.blade.php is the Navigation Bar that's displayed throughout our
     * entire application. The majority of this code was generated when I ran 
     *  the command "php artisan ui:auth".
     * 
     * The command automatically generated a Navigation Bar and authentication
     * controllers.  YAY LARAVEL!
     *
     */

?>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" style = "color: black;">
                    Laravel Inventory!
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                  <a class="nav-link" href="/assets">My Items</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/owner">All Items</a>
                                </li> 
                                <li class="nav-item">
                                  <a class="nav-link" href="/assets/create">Item +</a>
                                </li> 
                                <li class="nav-item">
                                  <a class="nav-link" href="/person/create">Person +</a>
                                </li> 
                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        </li>
                    @endguest
                </ul>
        </div>
    </div>
</nav>