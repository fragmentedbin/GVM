@extends('layout/templateMaster')
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <div class="section">
            {{-- SINGLE --}}
            <h2>Single</h2>
            <br>
            <div class="sec-container">
                <div class="sec-slide-row">
                    {{--  --}}
                    <div class="slide-arrow-prev d-flex align-items-center">
                        <div class="arrow-sircle d-flex align-items-center">
                            <img src="{{asset('img/svg/arrow_left.svg')}}" alt="">
                        </div>
                    </div>
                    {{--  --}}
                    <div class="slide-content">
                        <img src="{{asset('img/cover/anntypi-love.jpg')}}" alt="">
                        <div class="side-content">
                            <div class="slide-artist"><strong>anntypi</strong></div>
                            <div class="slide-song"><b>Love</b></div>
                            <div class="listen-platform" >
                                <a href="http://open.spotify.com/album/5F5pcfeUOrqPYLR36gK3Wz" target="_blank">
                                    <img class="platform-img" src="{{asset('img/svg/spotify.svg')}}" alt="">
                                </a>
                            </div>
                            <div class="listen-platform">
                                <a href="https://geo.itunes.apple.com/at/album/id1525341390?at=1l3v9Tx&app=itunes" target="_blank">
                                    <img class="platform-img" src="{{asset('img/svg/apple-music.svg')}}" alt="">
                                </a>
                            </div>
                            <div class="side-about">
                                <a href="">
                                    <i class="far fa-angle-double-right"></i>
                                    <span>more links</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="slide-arrow-next d-flex align-items-center">
                        <div class="arrow-sircle d-flex align-items-center">
                            <img src="{{asset('img/svg/arrow_right.svg')}}" alt="">
                        </div>
                    </div>
                    {{--  --}}
                </div>
                <div class="sec-slide-dot d-flex align-items-center">
                    <div class="slide-dot" data-target="1">
                        <i class="fas fa-circle"> </i>
                    </div>
                    <div class="slide-dot" data-target="2">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="slide-dot" data-target="3">
                        <i class="fas fa-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection