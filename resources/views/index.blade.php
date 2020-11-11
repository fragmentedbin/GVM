@extends('templateMaster')
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
                        <div class="card-img"><img src="{{asset('img/cover/anntypi-love.jpg')}}" alt=""></div>
                        <h3><i class="fas fa-compact-disc icon-fas-tittle"></i>LOVE</h3>
                        <p><i class="fas fa-user icon-fas-artist"></i>anntypi</p>

                    </div>
                </div>
                <div class="column-c">
                    <div class="card-c">
                        <div class="card-img"><img src="{{asset('img/cover/fajra-letsgo.jpg')}}" alt=""></div>
                        <h3 title="Letsgo">Letsgo</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
                <div class="column-c">
                    <div class="card-c">
                        <h3>Card 1</h3>
                        <div class="card-img"><img src="{{asset('img/cover/izuaf88-hidetheidentity.jpg')}}" alt=""></div>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
                <div class="column-c">
                    <div class="card-c">
                        <h3>Card 1</h3>
                        <div class="card-img"><img src="{{asset('img/cover/lostpaper-paradise.jpg')}}" alt=""></div>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
