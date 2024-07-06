<nav class="navbar navbar-expand-lg bgFirstColor">
    <div class="container-fluid d-flex justify-content-evenly">
                  
        
            <a class="navbar-brand m-0 d-flex align-items-center" href="{{route('home')}}">

                <svg class="size" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 800 800" style="enable-background:new 0 0 800 800;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#E8E8E8;}
                    </style>
                    <g>
                        <path class="st0" d="M700.8,664.6c-0.9,1.8-2.5,3.1-4.4,3.7l-107.2,33.5c-0.7,0.2-1.5,0.3-2.2,0.3c-3.3,0-6.2-2.2-7.2-5.3
                        L451.1,285.3l121.6-38l128.6,411.5C701.9,660.7,701.7,662.8,700.8,664.6z M565.9,225.5l-121.6,38L430.4,219L552,181L565.9,225.5z
                        M410.2,129.2l107.2-33.5c0.7-0.2,1.5-0.3,2.2-0.3c3.3,0,6.2,2.1,7.2,5.3l18.3,58.5l-121.6,38l-18.3-58.5
                        C404.1,134.6,406.3,130.4,410.2,129.2z M249.5,338.9h128.1v31.8H249.5V338.9z M377.6,316.1H249.5V204.2h128.1V316.1z M226.6,234.6
                        H98.3v-30.3h128.3V234.6z M98.3,257.4h128.3v30.4H98.3V257.4z M249.5,393.6h128.1v311.1H249.5V393.6z M257,96.5h113
                        c4.1,0,7.5,3.4,7.5,7.5v77.3H249.5V104C249.5,99.9,252.9,96.5,257,96.5z M105.9,96.5h113.2c4.2,0,7.6,3.4,7.6,7.5v77.3H98.3V104
                        C98.3,99.9,101.7,96.5,105.9,96.5z M98.3,310.7h128.3v394H98.3V310.7z"/>
                    </g>
                </svg>

        
            <h2 class="logoTitle text-white ms-4">Encyclopedia</h2>
        </a>
        @auth  
        <li class="nav-item dropdown mx-auto d-flex justify-content-center">
            <a class="nav-link dropdown-toggle thirdColor" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hello, {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu w-100 shadow">
                {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item d-flex justify-content-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#logout-form').submit(); ">Log Out</a></li>
                <form action="{{route('logout')}}" method="POST" class="d-none" id="logout-form">
                    @csrf
                </form>
            </ul>
        </li>
        @endauth
        
        <div class="button d-flex justify-content-end">
            <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                <i class="fa-solid fa-bars fa-3x" style="color: #ffffff;"></i>
            </button>
        </div>
        <div class="offcanvas offcanvas-end bgFirstColor" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                {{-- <button type="button" class="btn-close" ></button> --}}
                <i class="fa-solid fa-xmark ms-auto fa-3x" data-bs-dismiss="offcanvas" aria-label="Close" style="color: #ffffff;"></i>
            </div>
            <div class="offcanvas-body">
                <ul id="sideMenuMobile" class="mt-5 ms-4">
                    <a href="{{route('home')}}"><li>Home</li></a>
                    @guest
                        <a href="{{route('register')}}"><li>Sign in</li></a>
                        <a href="{{route('login')}}"><li>Log In</li></a>                        
                    @endguest
                    
                    <a href="{{route('addEntry')}}"><li>Add Entry</li></a>
                </ul>
            </div>
        </div>
    </div>
</nav>