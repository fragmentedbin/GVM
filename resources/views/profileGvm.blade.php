@extends('templateMaster')
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <div class="section1">
            <h1>{{ var_dump((request()->is('profileGvm')) ? 'active' : '') }}</h1>

            <br>
            <h2>Profile Grow Vibes Music</h2>
            <br>
            <div class="description-sec">
                <div class="description">
                    <p><span><b> GROW VIBES MUSIC</b> </span>is Recording Label From Indonesia. GROW VIBES MUSIC was founded in November 2018. GROW VIBES MUSIC is home to all music producers in Indonesia as well as Worldwide. In Here we serve various genre EDM. We Features artists like KAUTSAR, Lost Paper, Badix, oftensad, The Cordell, DANL, Ridzwan, Rigved, Francesco Russo, Dulous J, DE-V4N, XTROZZ and many more!</p>
                    <div>
                        <a href="https://open.spotify.com/user/o65k3kpaljg2gsaqxxypbxtzd"><img src="" alt=""><span>SPOTIFY</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
