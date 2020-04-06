@extends('layouts.app')

@section('content')
<div class="container">
<img src="/storage/{{$post->image}}" alt="Not Found" class="w-100">
</div>
<div class="col-4">
    <div>
        <h3>{{$post->user->username}}</h3>
        <p>{{$post->caption}}</p>
    </div>
</div>
@endsection