@extends('layouts.main')

@section('content')
<div>
    <main id="swup" class="transition-fade">
        <div style="height:50%;background-color:blue;">
            Hello Second page
        </div>
        <a href="/home" style="z-index: 2;
    width: 100px;
    position: absolute;
    color: black;
    bottom: 50%;
    right: 30%;"> asdasd </a>
    </main>
</div>
@endsection