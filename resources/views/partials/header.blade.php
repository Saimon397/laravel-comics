<?php 
$links = config('comics.navbar');
?>

<header>
    <nav class="nav-bar container2">
        <div class="logo-img"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo"></div>
        <ul class="links">
            @foreach ($links as $link)
            <li class="{{Route::currentRouteName() == $link['url'] ? 'active' : ''}}"><a href="{{$link['url']}}">{{$link['text']}}</a></li>
            @endforeach
        </ul>
    </nav>
</header>

