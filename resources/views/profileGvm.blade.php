@extends('layout/templateMaster')
<style>
    body {
        background: crimson;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    .streamin-platform {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-weight: bold;
    }

    .platform {
        background-color: aqua;

    }
    .a-link{
        text-align: center
    }
</style>
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <div class="section1">
            <div class="container">
                <h2>what is <b>Grow Vibes Music</b> ?</h2>
            </div>
            <div class="container" style="background: white;color:black;">
                <p><span><b> GROW VIBES MUSIC</b> </span>is a Recording Label From Indonesia. GROW VIBES MUSIC was founded in November 2018. GROW VIBES MUSIC is home to all music producers in Indonesia as well as Worldwide. In Here we serve various genre EDM. We Features artists like KAUTSAR, Lost Paper, Badix, oftensad, The Cordell, DANL, Ridzwan, Rigved, Francesco Russo, Dulous J, DE-V4N, XTROZZ and many more!</p>
                <h2 class="streamin-platform">STREAMING PLATFORM</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#" title="247"><img src="{{asset('img/store/str-247.png')}}" alt=""><p class="a-link">247</p></a></li>
                    <li class="list-group-item"><a href="#" title="Amazon Music"><img src="{{asset('img/store/str-amazon-music.png')}}" alt=""><p class="a-link">Amazon Music</p></a></li>
                    <li class="list-group-item"><a href="#" title="Anghami"><img src="{{asset('img/store/str-anghami.png')}}" alt=""><p class="a-link">Anghami</p></a></li>
                    <li class="list-group-item"><a href="#" title="Deezer"><img src="{{asset('img/store/str-deezer.png')}}" alt=""><p class="a-link">Deezer</p></a></li>
                    <li class="list-group-item"><a href="#" title="Digital"><img src="{{asset('img/store/str-digital.png')}}" alt=""><p class="a-link">Digital</p></a></li>
                    <li class="list-group-item"><a href="#" title="Feel Music"><img src="{{asset('img/store/str-feelmusic.png')}}" alt=""><p class="a-link">Feel Music</p></a></li>
                    <li class="list-group-item"><a href="#" title="Google Play"><img src="{{asset('img/store/str-google-play.png')}}" alt=""><p class="a-link">Google Play</p></a></li>
                    <li class="list-group-item"><a href="#" title="Hungma"><img src="{{asset('img/store/str-hungma.png')}}" alt=""><p class="a-link">Hungma</p></a></li>
                    <li class="list-group-item"><a href="#" title="iTunes"><img src="{{asset('img/store/str-itunes.png')}}" alt=""><p class="a-link">iTunes</p></a></li>
                    <li class="list-group-item"><a href="#" title="Joox"><img src="{{asset('img/store/str-joox.png')}}" alt=""><p class="a-link">Joox</p></a></li>
                    <li class="list-group-item"><a href="#" title="Juno Download"><img src="{{asset('img/store/str-junodownload.png')}}" alt=""><p class="a-link">Juno Download</p></a></li>
                    <li class="list-group-item"><a href="#" title="Mondia Media"><img src="{{asset('img/store/str-mondia-media.png')}}" alt=""><p class="a-link">Mondia Media</p></a></li>
                    <li class="list-group-item"><a href="#" title="Napster"><img src="{{asset('img/store/str-napster.png')}}" alt=""><p class="a-link">Napster</p></a></li>
                    <li class="list-group-item"><a href="#" title="Phononet"><img src="{{asset('img/store/str-phononet.png')}}" alt=""><p class="a-link">Phononet</p></a></li>
                    <li class="list-group-item"><a href="#" title="Play Network"><img src="{{asset('img/store/str-playnetwork.png')}}" alt=""><p class="a-link">Play Network</p></a></li>
                    <li class="list-group-item"><a href="#" title="Qobuz"><img src="{{asset('img/store/str-qobuz.png')}}" alt=""><p class="a-link">Qobuz</p></a></li>
                    <li class="list-group-item"><a href="#" title="Saavn"><img src="{{asset('img/store/str-saavn.png')}}" alt=""><p class="a-link">Saavn</p></a></li>
                    <li class="list-group-item"><a href="#" title="Shazam"><img src="{{asset('img/store/str-shazam.png')}}" alt=""><p class="a-link">Shazam</p></a></li>
                    <li class="list-group-item"><a href="#" title="Spotify"><img src="{{asset('img/store/str-spotify.png')}}" alt=""><p class="a-link">Spotify</p></a></li>
                    <li class="list-group-item"><a href="#" title="Tencent QQ"><img src="{{asset('img/store/str-tencent-qq.png')}}" alt=""><p class="a-link">Tencent QQ</p></a></li>
                    <li class="list-group-item"><a href="#" title="Thumb Play"><img src="{{asset('img/store/str-thumbplay.png')}}" alt=""><p class="a-link"></a>Thumb Play</li>
                    <li class="list-group-item"><a href="#" title="Tidal"><img src="{{asset('img/store/str-tidal.png')}}" alt=""><p class="a-link">Tidal</p></a></li>
                    <li class="list-group-item"><a href="#" title="VKM"><img src="{{asset('img/store/str-vkm.png')}}" alt=""><p class="a-link">VKM</p></a></li>
                    <li class="list-group-item"><a href="#" title="Youtube"><img src="{{asset('img/store/str-youtube.png')}}" alt=""><p class="a-link">Youtube</p></a></li>
                    <li class="list-group-item"><a href="#" title="Zeed"><img src="{{asset('img/store/str-zeed.png')}}" alt=""><p class="a-link">Zeed</p></a></li>
                </ul>
            </div>

        </div>
    </div>
    @endsection
