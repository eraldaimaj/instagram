@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->image}}" style="max-height:200px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline" ><h1>{{$user->username}}</h1>
            @can ('update',$user->profile)
        <button class="btn"style="background-color:#f51761; "><a href="/p/create" class="text-decoration-none"
            style=" color:white;">Add New Post</a></button> 
            @endcan
        </div>
         <div class="d-flex">
             <div class="pr-5"><strong>{{$user->posts->count()}} </strong>posts</div>
             <div class="pr-5"><strong>20M </strong>followers</div>
             <div class="pr-5"><strong>101 </strong>following</div>
         </div>
         <div class="pt-4 pb-4">{{$user->profile->title}} <br>
        <p>{{$user->profile->description}}</p>
        <a href="#" class="text-decoration-none">{{$user->profile->url}}</a>
    </div> 
    @can ('update',$user->profile)
    <button class="btn"style="background-color:#f51761; "><a href="/profile/{{$user->id}}/edit" class="text-decoration-none" 
        style=" color:white;">Edit Profile</a></button>
    @endcan
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
            
        <div class="col-4 pb-4">
           <a href="/p/{$post->id}"> <img src="/storage/{{$post->image}}" class="w-100"></a>
        </div>
        @endforeach
    </div>

</div>
@endsection

<style>

</style>