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
                            <a class="dropdown-item @if (Route::current()->getName() === 'artist')active active-c @endif"
                                href="{{ url('#' )}}">Artists</a>
                            <a class="dropdown-item @if (Route::current()->getName() === 'warnerForm')active active-c @endif"
                                data-toggle="modal" data-target=".bd-example-modal-lg" href="{{ url('/form/warnerForm' )}}">Partner Labels</a>
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
{{-- MODAL --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" style="color:black;" id="exampleModalLongTitle">Partner Labels</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="partner-labels">
            <div class="row-c">
                <div class="row-inner"><a target="_blank" href="https://linktr.ee/intersound"><img class="lable-img" src="{{asset('img/lable/intersoundstar.png')}}" alt=""></a></div>
                <div class="row-inner"><a target="_blank" href="https://twentysevenwave.wixsite.com/tswr"><img class="lable-img" src="{{asset('img/lable/tswr.png')}}" alt=""></a></div>
                <div class="row-inner"><a target="_blank" href="https://instabio.cc/NSNTRRecords"><img class="lable-img" src="{{asset('img/lable/nsntr.png')}}" alt=""></a></div>
                <div class="row-inner"><a target="_blank" href="https://www.instagram.com/on_musik/"><img class="lable-img" src="{{asset('img/lable/onmusic.png')}}" alt=""></a></div>
                <div class="row-inner"><a target="_blank" href="https://campsite.bio/dragonrproduction"><img class="lable-img" src="{{asset('img/lable/ryuzakirama.png')}}" alt=""></a></div>
                <div class="row-inner"><a target="_blank" href="https://www.instagram.com/malzsson/"><img class="lable-img" src="{{asset('img/lable/malzsson.png')}}" alt=""></a></div>
            </div>
        </div>
      </div>
    </div>
  </div>