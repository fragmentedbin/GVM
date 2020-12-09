@extends('layout/templateMaster')
@section('content')
<div class="faq">
    <div data-number="1" class="faq-qs d-flex p-2">
        <div data-number-class="1" class="faq-span">Q: what 1?
            <span class="show-btn" target="1"><i class="fas fa-chevron-down"></i></span>
            <div data-number-class-sub="1" class="faq-answer" hidden>A: answer 1</div>
        </div>
    </div>

    <div data-number="2" class="faq-qs d-flex p-2">
        <div data-number-class="2" class="faq-span">Q: what 2?
            <span class="show-btn" target="2"><i class="fas fa-chevron-down"></i></span>
            <div data-number-class-sub="2" class="faq-answer" hidden>A: answer 2</div>
        </div>
    </div>
</div>
@endsection