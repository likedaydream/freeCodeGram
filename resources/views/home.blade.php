@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img class="rounded-circle img-fluid" src="https://scontent-frt3-1.cdninstagram.com/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-frt3-1.cdninstagram.com&_nc_ohc=T5tEsqeZ5EwAX8dJOdF&oh=5c25ffdef5d25239782d83ae057b89c8&oe=5F47C71F" width="150" height="150" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add new post</a>
            </div>
            <p>
                <a href="#">Edit profile</a>
            </p>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                <a href="https://www.freecodecamp.org">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://scontent-frt3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.116.934.934a/s640x640/116106786_2474189362883863_2867941944190037605_n.jpg?_nc_ht=scontent-frt3-1.cdninstagram.com&amp;_nc_cat=107&amp;_nc_ohc=qLDE6mvqzPUAX-Rx3La&amp;oh=1bf95507328529ec225c3dfe0f7816f3&amp;oe=5F4ADEC2" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-frt3-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/109484059_3191825217520131_7300218735651506439_n.jpg?_nc_ht=scontent-frt3-2.cdninstagram.com&_nc_cat=103&_nc_ohc=hHT0rZOcVRYAX8bLabY&oh=3ed44384abae146cb9c55466815e3b13&oe=5F4A9F47" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-frt3-1.cdninstagram.com/v/t51.2885-15/e35/c126.0.498.498a/108305052_160842002267750_5473272707441362906_n.jpg?_nc_ht=scontent-frt3-1.cdninstagram.com&_nc_cat=102&_nc_ohc=0b7Z7Q8wTYIAX9Imsl6&oh=d5c5b807a3cac2c3373d95865173c72c&oe=5F4A8C0D" alt="">
        </div>
    </div>
</div>
@endsection
