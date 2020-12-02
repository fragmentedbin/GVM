@extends('layout/templateMaster')
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <div class="section">
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
                            <div class="listen-spotify">
                                <img src="{{asset('img/svg/spotify.svg')}}" alt="">
                            </div>
                            <div class="listen-appleMusic">
                                <img src="{{asset('img/svg/apple-music.svg')}}" alt="">
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
                {{-- <div class="sec-slide-dot d-flex align-items-center">
                    <div class="slide-dot" data-target="1">
                        <i class="fas fa-circle"> </i>
                    </div>
                    <div class="slide-dot" data-target="2">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="slide-dot" data-target="3">
                        <i class="fas fa-circle"></i>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection