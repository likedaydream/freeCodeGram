@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach ($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <img class="w-100" src="/storage/{{ $post->image }}" alt="">
                    </a>
                </div>
            </div>

            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <div>
                        <div class="font-weight-bold">
                            <a class="text-dark" href="/profile/{{ $post->user->id }}">
                                {{ $post->user->username }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>

    </div>
@endsection
