

    @auth
        <li class="nav-item dropdown bgFourthColor d-flex justify-content-center py-4">
            <a class="nav-link dropdown-toggle secondColor" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hello, {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu dropdownMenuCustom bgThirdColor shadow    ">
                {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                <li><hr class="dropdown-divider mx-auto"></li>
                <li><a class="dropdown-item d-flex justify-content-center " href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#logout-form').submit(); ">Log Out</a></li>
                <form action="{{route('logout')}}" method="POST" class="d-none" id="logout-form">
                    @csrf
                </form>
            </ul>
        </li>
    @endauth
    
    <ul id="sideMenu" class="pt-5 ms-4
    ">
    
    
    <a href="{{route('home')}}"><li>Home</li></a>
    @guest
        <a href="{{route('register')}}"><li>Sign in</li></a>
        <a href="{{route('login')}}"><li>Log In</li></a>        
    @endguest
    @auth
        <a href="{{route('addEntry')}}"><li>Add Entry</li></a>
        

    @endauth
</ul>

