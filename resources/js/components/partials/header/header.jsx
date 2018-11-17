<nav className="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
    <div className="container">
        <a className="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span className="navbar-toggler-icon"></span>
        </button>
        
        {{-- HERE: Customer Links --}}
        {{-- <li className="{{ Request::is('/') ? "nav-item active" : "" }}"> --}}

        <ul className="navbar-nav mr-auto">
            
            <li className="nav-item active">
              <a className="nav-link" href="/home">Home<span className="sr-only">(current)</span></a>
            </li>
            
            <li className="nav-item">
              <a className="nav-link" href="/venues">Venues</a>
            </li>
            
            {{-- ONLY WORKS WHEN LOGGED IN !!! --}}
            <li className="nav-item">
              <a className="nav-link" href="/filter_results">Filter </a>  
            </li>
            
            <li className="nav-item"> 
              <a className="nav-link" href="/reviews">Reviews</a>
            </li>
            
            <li className="nav-item">
                <a className="nav-link" href="/about">About Us</a>
            </li>
            
            {{-- <li className="nav-item dropdown">
              <a className="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div className="dropdown-menu" aria-labelledby="navbarDropdown">
                <a className="dropdown-item" href="#">Action</a>
                <a className="dropdown-item" href="#">Another action</a>
                <div className="dropdown-divider"></div>  
                <a className="dropdown-item" href="#">Something else here</a>
              </div>
            </li> --}}

            {{-- <li className="nav-item">
                    <a className="nav-link disabled" href="#">Disabled</a>
            </li> --}}
          </ul>
          
          <form className="form-inline my-2 my-lg-0">
            <input className="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button className="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

        <div className="collapse navbar-collapse" id="navbarSupportedContent">
          
            <!-- Left Side Of Navbar -->
            {{-- <ul className="navbar-nav mr-auto">

            </ul> --}}

            <!-- Right Side Of Navbar -->
            <ul className="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li className="nav-item">
                        <a className="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li className="nav-item">
                        @if (Route::has('register'))
                            <a className="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                
                 <!-- Here goes the links visible only to auth. user -->
                    <li className="nav-item dropdown">
                        <a id="navbarDropdown" className="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Hi  
                            {{ Auth::user()->name }} <span className="caret"></span>
                        </a>

                        <div className="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a className="dropdown-item" href="#">eVenturers</a>
                            <a className="dropdown-item" href="#">Bucket List</a>
                            <a className="dropdown-item" href="#">My Reviews</a>

                            <a className="dropdown-item" href="{{ route('logout') }}"
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
