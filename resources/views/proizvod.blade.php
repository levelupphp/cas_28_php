@extends('layout')

@section('content')
<div class="alert alert-info">
    ID: {{ $proizvod['id'] }},<br>
    Ime: {{ $proizvod['ime'] }},<br>
    Opis: {{ $proizvod['opis'] }}
</div>
@endsection