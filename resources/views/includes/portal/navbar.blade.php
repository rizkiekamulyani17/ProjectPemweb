<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        
       
                <nav>
                <a class="btn-getstarted scrollto text-center" href="{{ url('/') }}" style="width: 4.5cm">Home</a>
                    <!-- <a class="nav-link scrollto" href="{{ url('/') }}">Home</a> -->
                </nav>
                <nav>
                <a class="btn-getstarted scrollto text-center" href="{{ url('#about') }}"style="width: 4.5cm">About</a>
                    <!-- <a class="nav-link scrollto" href="{{ url('#about') }}">About</a> -->
                </nav>
                <nav>
                <a class="btn-getstarted scrollto text-center" href="{{ url('#faq') }}"style="width: 4.5cm">FAQ</a>
                    <!-- <a class="nav-link scrollto" href="{{ url('#faq') }}">FAQ</a> -->
                </nav>
                {{-- <li>
                    <a class="nav-link scrollto" href="{{ url('#comment') }}">Comment</a>
                </li> --}}
            
           
        @auth
        <a class="btn-getstarted scrollto text-center" href="{{ route('dashboard.index') }}" style="width: 4.5cm">My Dashboard</a>
        @else
        <a class="btn-getstarted scrollto text-center" href="{{ route('login.index') }}" style="width: 4.5cm">Login</a>
        @endauth
    </div>
</header>
<!-- End Header -->