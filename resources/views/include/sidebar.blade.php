
  <aside class="main-sidebar">
    <section class="sidebar pt-0">
      <!-- <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf -->
      <p  class="text-center profile-setting">
          @empty(Auth::user()->image)                                
          <img src="{{ asset('asset/images/profile-pic.png')}}" class="img-border-radius" />
          @else
          <a href="{{ route('profile') }}">  <img src="{{ asset('images/user_images'.'/'.Auth::user()->image)}}" class="img-border-radius" /></a>
          @endempty
      </p>
      <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">
      <input type="file" name="image" id="Image" style="display:none;">
      <a href="{{ route('profile') }}"> <p  style="padding-top:0px;"class="text-center mt-5 mb-0 text-white f-16">{{ Auth::user()->name }}</p></a>
      <p class="text-center mt-1"><img src="{{ asset('asset/images/p-line.png')}}" /></p>
      
      <ul class="sidebar-menu">

    <li class="treeview">
          <a href="{{ url('/') }}"><img src="{{ asset('assets/images/home.png')}}" /> <span> Home </span></a>
        </li>

        <li class="treeview">
          <a href="{{ route('campaign') }}"><img src="{{ asset('asset/images/camp.png')}}" /> <span> Campaign </span></a>
        </li>
         
        <li class="treeview">
          <a href="{{ route('socialinfo') }}"><img src="{{ asset('asset/images/social.png')}}" /> <span> Social Info</span></a>
        </li>
        
        @guest
        @else
        <li class="treeview">
          <a href="{{ route('logout') }}" id="logoutSubmit" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <img src=" {{ asset('asset/images/logout.png')}} " /> <span> Logout</span></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
        @endguest
      </ul>
    
    </section>
    <div class="help-menu" style="bottom:0px;"><a href="#"><img src="{{ asset('asset/images/help.png')}}" /> Help</a></div>
  </aside>
  <script>
    // var lt = document.getElementById('logoutSubmit');
    // lt.addEventListener('click', function(e){
    //   console.log(e);
    //   document.getElementById('btnLogoutSubmit').click();

    // });
  </script>
  
  