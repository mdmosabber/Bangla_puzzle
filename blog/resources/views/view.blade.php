@extends('master')
<style>
    #comment_box{
        display: none;
    }
    #comment_box.show{
        display: block;
    }
</style>


@section('home-body')

    <div class="container">
        <div class="row">

            @if (session()->has('message'))
                <h6 class="text-center text-success">{{ session('message') }}</h6>
            @endif

            @isset($blog)
                <div class="col-lg-8 mx-auto py-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="user-name">
                                 {{$blog->title}}
                            </h3>
                            <p> {{ $blog->description }} </p>
                            <div class="author d-flex align-items-center">
                                <div class="avater">
                                    <img src="{{$blog->userName($blog->user_id)->profile_photo_url}}" alt="">
                                </div>
                                <div class="content px-2">
                                    <h5>{{$blog->userName($blog->user_id)->name}}</h5>
                                    <p class="mb-0">{{\Carbon\Carbon::parse($blog->created_at)->format('d-M-y')}} </p>
                                </div>
                            </div>

                            <div class="pt-3 d-flex">
                                <a id="comment_btn" class="btn btn-secondary mb-3" style="margin-right: 5px">Comment</a>
                                <a href="" class="btn btn-secondary mb-3"> {{$count}} </a>
                            </div>

                            <div id="comment_box">
                                <form action="{{route('user.comment.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $blog->id }}">
                                    <input type="hidden" name="user_id" value="{{ $blog->user_id}}">
                                    <textarea name="comment" class="form-control" rows="4" placeholder="Comment Here..." required></textarea>
                                    @error('comment')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="submit" value="Submit" class="btn btn-success w-100 mt-3">
                                </form>
                            </div>

                            <div class="comment-show">
                                <h5>Comment Show:</h5>
                                @foreach($comments as $comment)
                                    <p> {{$comment->comment}} </p>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            @endisset

        </div>

        <script>
            document.getElementById('comment_btn').addEventListener('click', ()=> {

                $comment_box = document.getElementById('comment_box');

                if($comment_box.classList.contains('show') ){
                    $comment_box.classList.remove('show');
                }else {
                    $comment_box.classList.add('show');
                }
            })
        </script>


    </div>

@endsection


