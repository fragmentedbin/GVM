<div class="top-container-c">
    <div class="top-wrapper-c">
        <nav class="navbar top">
            <span class="navbar-brand"><a href="/test"><img src="{{asset('img/logo-navbar.jpg')}}" alt=""></span></a>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown {{ (request()->is('/')) ? 'active active-c' : '' }}">
                        <a class="nav-link dropdown-toggle releasesAnchor" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Releases
                        </a>
                        <div class="dropdown-menu dropdown-menu-c animate-menu slideIn-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">All Releases</a>
                            <a class="dropdown-item" href="#">LP</a>
                            <a class="dropdown-item" href="#">Album</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Submit Track</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Artist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Partner Labels</a>
                    </li>
                    <li class="nav-item {{ (request()->is('profileGvm')) ? 'active active-c' : '' }}">
                        <a class="nav-link" href="{{ url('/profileGvm' )}}">Profile Grow Vibes Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
