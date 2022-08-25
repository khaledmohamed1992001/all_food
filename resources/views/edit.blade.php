@extends('master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Edit your comment</h2>
                                    <form method="POST" action="{{route('comments.update',$comment->id)}}">
                                        <input type="hidden" name="_method" value="PUT" >
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <label for="comment"
                                                   class="form-label form-control-lg">{{ __('Comment') }}</label>
                                            <textarea id="comment" class="form-control" name="comment" value="{{ old('comment') }}" autofocus>{{$comment->comment}}</textarea>
                                        </div>
                                        <button type="submit" class="btn">edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
@endsection
