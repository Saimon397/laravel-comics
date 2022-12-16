<?php
$links = config('comics.footersection');
?>

<footer>
<div class="bg-section">
    <div class="container4">
        @foreach ($links as $link)
    <div class="list">
        <div>
            <h3>{{$link['title']}}</h3>
        </div>
        <ul>
        @foreach ($link['links'] as $list)
        <li>
            <a href="{{$list['url']}}">{{$list['text']}}</a>
        </li>
        @endforeach
    </ul>
    </div>
    @endforeach
    <img src={{ Vite::asset('resources/img/dc-logo-bg.png') }} alt="logo-bg">
    </div>
    <div class="containerr">
        <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All rigths reserved.<br> <a href="">Cookies Settings</a></p>
    </div>
</div>
<div class="section-social">
    <div class="container5">
    <div>
        <button><a href="#nogo">sign-up now!</a></button>
    </div>
    <div class="social-img">
        <span>follow us</span>
        <a href="#nogo"><img src={{ Vite::asset('resources/img/footer-facebook.png') }} alt="fb"></a>
        <a href="#nogo"><img src={{ Vite::asset('resources/img/footer-twitter.png') }} alt="twitter"></a>
        <a href="#nogo"><img src={{ Vite::asset('resources/img/footer-youtube.png') }} alt="yt"></a>
        <a href="#nogo"><img src={{ Vite::asset('resources/img/footer-pinterest.png') }} alt="pinterst"></a>
        <a href="#nogo"><img src={{ Vite::asset('resources/img/footer-periscope.png') }} alt="periscope"></a>
    </div>
    </div>
</div>
</footer>