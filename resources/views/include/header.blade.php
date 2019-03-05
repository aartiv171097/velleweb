
    <header id="header">            
        <div class="header_content" id="header_content">

            <div class="container">
                <div class="header_logo">
                    <a href="#" style="color: #fff !important; font-size:25px; font-weight:700;" >BrandCer</a>
                </div>
                
                <nav class="header_menu">
                      
                    <ul class="menu">
                        <li><a href="{{ route('login') }}">I'M Influencer</a></li>
                        <li><a href="{{ route('brands') }}">I'M Brand</a>
                           {{--  <ul class="sub-menu">
                                <li><a href="#">Brands</a></li>
                                <li><a href="{{route('login') }}">Creators</a></li>
                            </ul>--}}
                        </li>
                         {{-- <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>--}}
                    </ul>
                </nav>
                
                <span class="menu-bars">
                    <span></span>
                </span>
            </div>
        </div>

    </header>
    
