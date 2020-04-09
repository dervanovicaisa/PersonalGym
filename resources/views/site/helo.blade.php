@extends('layouts.main')

@section('content')
    <main id="swup" class="transition-fade">
        <div style="height:50%;background-color:blue;">
            Hello Second page
        </div>
        <a href="/j" style="z-index: 2;
    width: 100px;
    position: absolute;
    color: black;
    bottom: 50%;
    right: 30%;"> KUCA </a>
    </main>
    <div class="transition-wipe overlay1"></div>

@endsection