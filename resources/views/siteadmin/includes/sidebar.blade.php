<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
            <a href="{{route('admin.dashboard')}}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-title"> 
                    <span class="m-menu__link-wrap"> 
                        <span class="m-menu__link-text">{{ __('Dashboard') }}</span>
                        {{-- <span class="m-menu__link-badge">
                            <span class="m-badge m-badge--danger">2</span>
                        </span>  --}}
                    </span>
                </span>
            </a>
        </li>
        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
            <a href="{{route('admin.users')}}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-title"> 
                    <span class="m-menu__link-wrap"> 
                        <span class="m-menu__link-text">Users</span>
                        {{-- <span class="m-menu__link-badge">
                            <span class="m-badge m-badge--danger">2</span>
                        </span>  --}}
                    </span>
                </span>
            </a>
        </li>

        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
            <a href="{{route('admin.request')}}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-title"> 
                    <span class="m-menu__link-wrap"> 
                        <span class="m-menu__link-text">Campaign</span>
                        {{-- <span class="m-menu__link-badge">
                            <span class="m-badge m-badge--danger">2</span>
                        </span>  --}}
                    </span>
                </span>
            </a>
        </li>
        
       </ul>
   </div>