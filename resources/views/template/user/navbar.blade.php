<nav class="navbar navbar-expand-lg navbar-dark fixed-top text-center" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('build/assets/user/assets/img/navbar-logo.svg')}}" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse ml-4 justify-center" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ">
                        <li class="nav-item"><a class="nav-link " href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link " href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link " href="/artikel">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link " href="/reservasi">Reservasi</a></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav text-uppercase">
                        <li class="nav-item">
                            @guest
                                <a href="/login" class="nav-link ">
                                    LOGIN
                                </a>    
                            @else
                                <a id="" class="nav-link text-uppercase navbar-toggle dropdown-toggle" href="#" role="button" data-target="#dropdownMenu" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul id="dropdownMenu" class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="/profile">Profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>

                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </nav>