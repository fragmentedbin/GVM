<div class="top-container-c">
    <div class="top-wrapper-c">
        <nav class="navbar top">
            <span class="navbar-brand"><a href="/"><img src="{{asset('/img/logo-navbar.jpg')}}" alt=""></span></a>
            <div class="vibes">
                <a href="/">
                    <h1 class="vibes-h1">GROW VIBES</h1>
                    <p>Music</p>
                </a>
            </div>
        </nav>
    </div>
</div>
<div class="bottom-container-c">
    <div class="bottom-wrapper-c">
        <nav class="navbar bottom navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse justify-content-center navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown @if (Route::current()->getName() === 'home')active active-c @endif ">
                        <a class="nav-link dropdown-toggle releasesAnchor" href="/" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Releases
                        </a>
                        <div class="dropdown-menu dropdown-menu-c animate-menu slideIn-menu"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item @if (Route::current()->getName() === 'home')active active-c @endif"
                                href="{{ url('' )}}">Single</a>
                            <a class="dropdown-item @if (Route::current()->getName() === 'ep')active active-c @endif"
                                href="{{ url('' )}}">EP</a>
                            <a class="dropdown-item @if (Route::current()->getName() === 'lp')active active-c @endif"
                                href="{{ url('' )}}">LP</a>
                            <a class="dropdown-item @if (Route::current()->getName() === 'album')active active-c @endif"
                                href="{{ url('' )}}">Album</a>
                        </div>
                    </li>
                    <li
                        class="nav-item dropdown @if  (Route::current()->named('sonyForm', 'warnerForm')) active active-c @endif ">
                        <a class="nav-link dropdown-toggle releasesAnchor" href="/" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Submit Demo
                        </a>
                        <div class="dropdown-menu dropdown-menu-c animate-menu slideIn-menu"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item @if (Route::current()->getName() === 'sonyForm')active active-c @endif"
                                href="{{ url('/form/sonyForm' )}}">Sony Music</a>
                            <a class="dropdown-item @if (Route::current()->getName() === 'warnerForm')active active-c @endif"
                                href="{{ url('/form/warnerForm' )}}">Warner Music</a>
                            <a class="dropdown-item @if (Route::current()->getName() === 'submit')active active-c @endif"
                                href="{{ url('' )}}">Our Distribution</a>

                        </div>
                    </li>
                    <li
                        class="nav-item dropdown @if  (Route::current()->named('sonyForm', 'warnerForm')) active active-c @endif ">
                        <a class="nav-link dropdown-toggle releasesAnchor" href="/" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Creators
                        </a>
                        <div class="dropdown-menu dropdown-menu-c animate-menu slideIn-menu"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item @if (Route::current()->getName() === 'sonyForm')active active-c @endif"
                                href="{{ url('/form/sonyForm' )}}">Artists</a>
                            <a class="dropdown-item @if (Route::current()->getName() === 'warnerForm')active active-c @endif"
                                href="{{ url('/form/warnerForm' )}}">Parter Labels</a>
                        </div>
                    </li>


                    <li class="nav-item @if (Route::current()->getName() === 'profileGvm')active active-c @endif">
                        <a class="nav-link" href="@if($featureAccess == 0) # @else {{ url('profileGvm' )}} @endif "> Who
                            We Are</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>