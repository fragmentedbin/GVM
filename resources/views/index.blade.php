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
                        <h3>Card 1</h3>
                        <div class="card-img"><img src="{{asset('img/cover/anntypi-love.jpg')}}" alt=""></div>
                        <p>Some text</p>
                        <p>Some text</p>
                        {{-- <div class="card-background">
                            <img src="{{asset('img/cover/anntypi-love.jpg')}}" alt="">
                        </div> --}}

                    </div>
                </div>
                <div class="column-c">
                    <div class="card-c">
                        <h3>Card 1</h3>
                        <div class="card-img"><img src="{{asset('img/cover/fajra-letsgo.jpg')}}" alt=""></div>
                        <p>Some text</p>
                        <p>Some text</p>
                        {{-- <div class="card-background">
                            <img src="{{asset('img/cover/fajra-letsgo.jpg')}}" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="column-c">
                    <div class="card-c">
                        <h3>Card 1</h3>
                        <div class="card-img"><img src="{{asset('img/cover/lostpaper-paradise.jpg')}}" alt=""></div>
                        <p>Some text</p>
                        <p>Some text</p>
                        {{-- <div class="card-background">
                            <img src="{{asset('img/cover/lostpaper-paradise.jpg')}}" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
