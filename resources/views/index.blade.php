@extends('layout/templateMaster')
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <div class="section1">
            <h2>Single</h2>
            <br>
            <div class="row-c">
                <div class="column-c">
                    <div class="card-c">
                        {{--
                            <div class="card-background">
                                <img src="{{asset('img/cover/anntypi-love.jpg')}}" alt="">
                            </div>
                            --}}
                        <div class="card-sec">
                            <div class="card-img"><img src="{{asset('img/cover/anntypi-love.jpg')}}" alt=""></div>
                            <h3><i class="fas fa-compact-disc icon-fas-tittle"></i>LOVE</h3>
                            <p><i class="fas fa-user icon-fas-artist"></i><span class="card-artist">Anntypi</span></p>
                        </div>
                    </div>
                </div>
                <div class="column-c">
                    <div class="card-c">
                        <div class="card-sec">
                            <div class="card-img"><img src="{{asset('img/cover/fajra-letsgo.jpg')}}" alt=""></div>
                            <h3><i class="fas fa-compact-disc icon-fas-tittle"></i>Let's Go!!</h3>
                            <p><i class="fas fa-user icon-fas-artist"></i><span class="card-artist">Fajra</span></p>
                        </div>
                    </div>
                </div>
                <div class="column-c">
                    <div class="card-c">
                        <div class="card-sec">
                            <div class="card-img"><img src="{{asset('img/cover/izuaf88-hidetheidentity.jpg')}}" alt=""></div>
                            <h3><i class="fas fa-compact-disc icon-fas-tittle"></i>Hide The Identitity</h3>
                            <p><i class="fas fa-user icon-fas-artist"></i><span class="card-artist">Izuaf88 & Dendipapey</span></p>
                        </div>
                    </div>
                </div>
                <div class="column-c">
                    <div class="card-c">
                        <div class="card-sec">
                            <div class="card-img"><img src="{{asset('img/cover/lostpaper-paradise.jpg')}}" alt=""></div>
                            <h3><i class="fas fa-compact-disc icon-fas-tittle"></i>Paradise</h3>
                            <p><i class="fas fa-user icon-fas-artist"></i><span class="card-artist">Lost Paper</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
