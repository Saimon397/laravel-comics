<?php 
$blue = config('comics.bluesection');
?>

@extends('layout.app')

@section('content')

<div class="jumbo">
            <button><a href="#nogo">current series</a></button>
        </div>
        <div class="bg-main">
            <div class="container2">
                <div class="row">
                    @foreach ($comics as $comic)
                    <div class="card">
                        <div class="cardbox">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <div>
                            <h4>{{$comic['series']}}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="btn">
                <button><a href="#nogo">load more</a></button>
            </div>
        </div>
        <div class="container3">
            <ul>
                @foreach ($blue as $item)
                <li>
                    <img class="ico-img" src="{{Vite::asset('resources/img/') .$item['img']}}">
                    <span>{{$item['text']}}</span>
                </li>
                @endforeach
            </ul>
            </div>
        @endsection

