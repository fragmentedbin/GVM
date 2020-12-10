@extends('layout/templateMaster')
@section('content')
<div class="faq">
    <h1>FAQ</h1>
    <p>Here you can see Frequntly Ask Questions about Grow Vibes Music Indonesia!</p>
    <div id="accordion">
        <div class="card card-faq">
            <div class="card-header" id="faqOne">
                <h5 class="mb-0 faq-card-question">
                    <span class="faq-logo-question" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne"><i class="far fa-question-circle"></i></span>
                    <div class="faq-btn d-flex algin-item-center collapsed" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span class="faq-question">What is Grow Vibes Music?</span>
                    </div>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="faqOne" data-parent="#accordion">
                <div class="card-body faq-card-body">
                    <span class="faq-logo-answer"><i class="far fa-check-circle"></i></span>
                    <div class="faq-sec-answer">
                        GROW VIBES MUSIC is home to all music producers in Indonesia as well as Worldwide.
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-faq">
            <div class="card-header" id="faqOTwo">
                <h5 class="mb-0 faq-card-question">
                    <span class="faq-logo-question" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo"><i class="far fa-question-circle"></i></span>
                    <div class="faq-btn d-flex algin-item-center collapsed" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="faq-question">How do I submit to the Grow Vibes Music label?</span>
                    </div>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="faqOTwo" data-parent="#accordion">
                <div class="card-body faq-card-body">
                    <span class="faq-logo-answer"><i class="far fa-check-circle"></i></span>
                    <div class="faq-sec-answer">
                        On top of the Navigation bar Select "Submit Demo" and choose platform you prefer to!
                        or you can click <a href="#sel-submitDemo">here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection