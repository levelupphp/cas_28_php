@extends('layout')

@section('content')
@if($show == 'link')
<a href="#">Link</a>
@else
<ul>
    @foreach($proizvodi as $proizvod)
        <li>
            <a href="/proizvod/{{ $proizvod['id'] }}">{{ $proizvod['ime'] }}</a>
        </li>
    @endforeach
</ul>
@endif
<div {{ $mode == 'dark' ? "class=bg-dark" : "style=background-color:pink;" }}>
    <p>
        Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes. Background utilities do not set color, so in some cases you’ll want to use .text-* utilities.
    </p>
</div>
@endsection