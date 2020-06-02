@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fbgw4-2.fna.fbcdn.net/v/t51.2885-19/s150x150/17883107_1258302477621562_1355473579625414656_a.jpg?_nc_ht=instagram.fbgw4-2.fna.fbcdn.net&_nc_ohc=un1ykmmUHRYAX8dHP1S&oh=2c7c5c050c0211448c6677d40e5ebf6a&oe=5EFD789B" class="rounded-circle" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="">
                <h1>{{ $user->username }}<h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>91 </strong>Posts</div>
                <div class="pr-5"><strong>540 </strong>Followers</div>
                <div class="pr-5"><strong>754 </strong>Following</div>
            </div>
            <div class="pt-4 font-weight-bold">Bilend Mohammed</div>
            <div class="">🦉</div>
            <div class=""><a href="#" class="">Bilend Mohammed's link</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="https://instagram.fbgw4-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.104.833.833a/s240x240/75214688_2558514034185435_2767792681582400592_n.jpg?_nc_ht=instagram.fbgw4-2.fna.fbcdn.net&_nc_cat=103&_nc_ohc=1jVo8QQZDmIAX-cqUOR&oh=28c18e6ec19625c1616b0c53a4fa99cb&oe=5EFE4DE1" class="w-100" alt=""></div>
        <div class="col-4"><img src="https://instagram.fbgw4-2.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/66208782_161521478232165_1875696574246506176_n.jpg?_nc_ht=instagram.fbgw4-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=MqapINpascEAX9qqpcD&oh=01f76bf5d86b2cf2f8df819134b6e7b9&oe=5EFFE8AE" class="w-100" alt=""></div>
        <div class="col-4"><img src="https://instagram.fbgw4-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/53430140_488294425037069_7367568524743298266_n.jpg?_nc_ht=instagram.fbgw4-2.fna.fbcdn.net&_nc_cat=105&_nc_ohc=2nF6NKukhawAX8dchfn&oh=1ac8283fe4f9c85820c515992d7c60e4&oe=5EFE64EF" class="w-100" alt=""></div>
    </div>
</div>
@endsection
