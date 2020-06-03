@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fbgw4-2.fna.fbcdn.net/v/t51.2885-19/s150x150/17883107_1258302477621562_1355473579625414656_a.jpg?_nc_ht=instagram.fbgw4-2.fna.fbcdn.net&_nc_ohc=un1ykmmUHRYAX8dHP1S&oh=2c7c5c050c0211448c6677d40e5ebf6a&oe=5EFD789B" class="rounded-circle" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-baseline">
                <h1>{{ $user->username }}<h1>
                <a style="font-size: 0.5em;" class="" href="/p/create">Add a new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }} </strong>Posts</div>
                <div class="pr-5"><strong>540 </strong>Followers</div>
                <div class="pr-5"><strong>754 </strong>Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="">{{ $user->profile->description }}</div>
            <div class=""><a href="#" class="">{{ $user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">

        @foreach ($user->posts as $post)
            <div class="col-4 pb-4"><img src="/storage/{{ $post->image }}" class="w-100" alt=""></div>
        @endforeach


    </div>
</div>
@endsection
