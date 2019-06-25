@extends('layout')

@section('content')
<form action="/add-post" method="post">
    @csrf
    <input class="form-control" name="post_title" placeholder="Post title">
    <textarea class="form-control" name="post_content" placeholder="Post content"></textarea>
    <input type="submit" class="btn btn-primary" value="Save post">
</form>
@endsection