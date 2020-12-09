@extends('layout/templateMaster')
@section('content')
<div class="faq">
    <div data-number="1" class="row d-flex align-items-center faq-qs">
        <div class="col-11">
            <div class="">
                <span class="logo-qa"><i class="far fa-question-circle"></i></span>
                <span class="faq-tittle-ans">what 1?</span>
            </div>
        </div>
        <div class="col-1">
            <div class="">
                <span class="show-btn" target="1"><i class="fas fa-chevron-down"></i></span>
            </div>
        </div>
        <div data-number="1" class="row align-items-center">
            <div class="col-11">
                <div class="">
                    <span class="logo-qa"><i class="far fa-check-circle"></i></span>
                    <span class="faq-tittle-ans">answe 1!</span>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div data-number="1" class="faq-qs d-flex flex-row">
    <div data-number-class="1" class="faq-span">
        <div>
            <span class="logo-qa"><i class="far fa-question-circle"></i></span><span class="faq-tittle-ans">what
                1?</span>
        </div>
        <div class="mr-auto" style="display: inline !important;">
            <span class="show-btn" target="1"><i class="fas fa-chevron-down"></i></span>
        </div>
        <div data-number-class-sub="1" class="faq-answer p-2"><span class="logo-qa">
                <i class="far fa-check-circle"></i></span>answer 1</div>
    </div>
</div> --}}
@endsection