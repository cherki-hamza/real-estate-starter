
<div class="container">
    <hr class="color_1">
</div>
<div class="container">
         <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
             <a class="navbar-brand" href="">Real Estate</a>
             <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                     <li class="nav-item active">
                         <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                     </li>

                     @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                         <li class="nav-item mx-auto">
                            <a class="nav-link active" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                            </a>
                        </li>
                     @endforeach

                 </ul>


                 <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else


                        <li class="nav-item mr-4">
                        <a class="nav-link text-primary font-weight-bold" href="{{route('dashboard')}}"><i class="fa fa-user-injured mr-2"></i>{{ __('Dashboard') }}</a>
                        </li>

                        <li class="nav-item"><img src="{{Auth::user()->getGravatar()}}"  style="border-radius: 100%; width: 35px;height: 35px;" alt=""></li>

                        <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right my-4" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                        </li>
                    @endguest
                </ul>

                 {{-- <ul class="navbar-nav ml-5 mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">register</a>
                    </li>

                </ul> --}}
             </div>
         </nav>
</div>







