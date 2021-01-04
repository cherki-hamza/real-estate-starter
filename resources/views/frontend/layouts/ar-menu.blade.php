
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('site')}}">
        <img style="width: 100px;height: 50px;border-radius: 20px;" class="img-fluid" src="{{asset('frontend-assets/img/logo-cherki-hamza.png')}}" alt="laravel">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="{{route('site')}}">{{__('site.HOME')}}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{__('site.DEV')}}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('site.LANG')}}</a>
                <div class="dropdown-menu my-4" aria-labelledby="dropdownId">


                    <!-- Tasks Menu -->
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>

                    @endforeach

                </div>
            </li>

            {{-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
<span style="margin-right: 4px;">
<a class="nav__link active" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
{{ $properties['native'] }}
</a>
</span>
@endforeach --}}

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
                    <a class="nav-link text-primary font-weight-bold" href="{{route('dashboard')}}">{{ __('site.DASHBOARD') }}<i class="fa fa-user-injured ml-2"></i></a>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->getName() }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right my-4" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="">
                            <span>{{__('site.PROFILE')}}</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">
                            <span>{{__('site.SETTINGS')}}</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('site.LOGOUT') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

                <li class="nav-item"><img src="{{Auth::user()->getGravatar()}}"  style="border-radius: 100%; width: 35px;height: 35px;" alt=""></li>

            @endguest
        </ul>
    </div>
</nav>



            {{-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
<span style="margin-right: 4px;">
<a class="nav__link active" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
    {{ $properties['native'] }}
</a>
</span>
@endforeach --}}
