@extends('master')
@section('content')
    <br>
    <br>
    <main>
        <div class="comments-area">
            <div class="comment-list">
                <div class="single-comment">
                    <div class="user" style="margin: auto;width: 50%;">
                        @foreach($user->comments as $comment)
                                <img src="/assets/{{$comment->photo}}" class="img-fluid">
                            <div class="desc">
                                <p class="comment">
                                    {{$comment->comment}}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a>{{$comment->user->name}}</a>
                                        </h5>
                                        <p class="date">{{$comment->created_at}} </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
