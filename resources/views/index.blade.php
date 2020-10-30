@extends('templateMaster')
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <div class="section1">
            <h2>Single</h2>
            <br>

            <div class="row">
                <div class="col-sm card-section-col ">
                    <div class="card card-c">
                        <img class="card-img-top" src="{{asset(url('/img/cover/anntypi-love.jpg'))}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">LOVE</h5>
                            <p class="card-text">who to love</p>
                            <a href="#" class="btn btn-primary">Listen Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm card-section-col">
                    <div class="card card-c">
                        <img class="card-img-top" src="{{asset(url('/img/cover/anntypi-love.jpg'))}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm card-section-col">
                    <div class="card card-c">
                        <img class="card-img-top" src="{{asset(url('/img/cover/anntypi-love.jpg'))}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm card-section-col">
                    <div class="card card-c">
                        <img class="card-img-top" src="{{asset(url('/img/cover/anntypi-love.jpg'))}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
