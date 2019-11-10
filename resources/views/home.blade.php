@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-nrt1-1.cdninstagram.com/vp/093d4d51e68e90e594a611c4c40c622c/5E5AF927/t51.2885-19/s320x320/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=scontent-nrt1-1.cdninstagram.com" class="rounded-circle" style="height: 100px;">
        </div>
        <div class="col-9 p-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>220</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="https://scontent-nrt1-1.cdninstagram.com/vp/28a8fb97e277c66344fbabba218b3f45/5E444480/t51.2885-15/sh0.08/e35/c0.115.933.933a/s640x640/73319948_3118988548118480_2584593794372883946_n.jpg?_nc_ht=scontent-nrt1-1.cdninstagram.com&_nc_cat=108" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://scontent-nrt1-1.cdninstagram.com/vp/28a8fb97e277c66344fbabba218b3f45/5E444480/t51.2885-15/sh0.08/e35/c0.115.933.933a/s640x640/73319948_3118988548118480_2584593794372883946_n.jpg?_nc_ht=scontent-nrt1-1.cdninstagram.com&_nc_cat=108" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://scontent-nrt1-1.cdninstagram.com/vp/28a8fb97e277c66344fbabba218b3f45/5E444480/t51.2885-15/sh0.08/e35/c0.115.933.933a/s640x640/73319948_3118988548118480_2584593794372883946_n.jpg?_nc_ht=scontent-nrt1-1.cdninstagram.com&_nc_cat=108" class="w-100"/>
        </div>
    </div>
</div>
@endsection
