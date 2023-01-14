@extends('user.master')

@section('user-body')



    <div class="user-dashboard">
        <div class="row">

        <div class="col-lg-12">

            @if (session()->has('message'))
                <h6 class="text-center text-success">{{ session('message') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h2>Post Here </h2>
                </div>
                <div class="card-body">
                    <form action="{{route('user.blog-post.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="@isset($blog) {{ $blog->id  }} @endisset">
                        <div class="form-group mb-3">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" id="title" placeholder="Enter Post Title" class="form-control"  value="@isset($blog) {{ $blog->title  }} @endisset">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" placeholder="Enter slug or it will be generated auto" class="form-control" value="@isset($blog) {{ $blog->slug  }} @endisset">
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea  name="description" id="description" placeholder="Enter Description" class="form-control">@isset($blog){{ $blog->description }}@endisset</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input type="submit"
                                   @isset($blog)
                                    value="Update"
                                   @else
                                    value="Submit"
                                   @endisset
                                   class="btn btn-success w-100">
                        </div>

                    </form>
                </div>
            </div>
        </div>


        </div>
    </div>

    <!--// Row end -->


@endsection
