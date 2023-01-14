@extends('master')



@section('home-body')

    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 py-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="user-name">
                                <a href="{{route('user.view.post-details',["slug"=>$blog->slug,"id"=>$blog->id ])}}"> {{$blog->title}} </a>
                            </h3>

                            <p> {{  Str::limit($blog->description, 200) }} </p>

                            <div class="author d-flex align-items-center">
                                <div class="avater">
                                    <img src="{{$blog->userName($blog->user_id)->profile_photo_url}}" alt="">
                                </div>

                                <div class="content px-2">
                                    <h5>{{$blog->userName($blog->user_id)->name}}</h5>
                                    <p class="mb-0">{{\Carbon\Carbon::parse($blog->created_at)->format('d-M-y')}} </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{$blogs->links()}}

    </div>

    @endsection
