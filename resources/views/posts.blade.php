@extends('layouts.main')
@section('content')
    @foreach ($posts as $post)
    {{$post['name']}}<br>
    @endforeach
@endsection