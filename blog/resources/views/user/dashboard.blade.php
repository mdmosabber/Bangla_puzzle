@extends('user.master')

@section('user-body')

    <div class="user-dashboard">
        <div class="row">

            <div class="col-lg-4">
                <div class="card my-3">
                    <div class="card-body text-center user-bg-one">
                        <img src="{{Auth::user()->profile_photo_url}}" alt="user">
                        <h4 class="py-3">{{$user->name}}</h4>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--// Row end -->


@endsection



