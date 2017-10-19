<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('', 'Tooted') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <!--Login page link-->
                        @if (Route::has('/login'))
                         <li><a href="{{ url('/') }}">Esilehele</a></li>
                        @else
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                             @else
                             {{--Admin and User can add things--}}
                             @if(Auth::user()->role==0 || Auth::user()->role==1 )
                             <li><a href="{{ url('/create') }}" class="bg-success" title="Lisa uus toode">Lisa uus </a></li>
                             @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                
                                {{--Only Admin can add new users - not working propery--}}
                                <ul class="dropdown-menu" role="menu">
                                    @if(Auth::user()->role==0)
                                    <li><a href="{{ url('/register') }}">Lisa uus kasutaja</a></li>
                                    @endif

                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>

                            </li>

                            @endif
                         @endif
                    </ul>
                </div>
            </div>
        </nav>