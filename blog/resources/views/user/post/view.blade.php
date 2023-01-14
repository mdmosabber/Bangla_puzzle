@extends('user.master')

@section('user-body')

    <div class="user-dashboard">
        <div class="row">

            <div class="col-lg-12 pb-3">

                @if (session()->has('message'))
                    <h6 class="text-center text-success">{{ session('message') }}</h6>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h2>Blog Post Show Here</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($blogs as $key => $blog)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->slug}}</td>
                                        <td>{{$blog->description}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('user.edit.blog-post',$blog->id)}}" class="btn btn-primary px-1 py-1"><img src="{{asset('assets/icon/edit.svg')}}" alt=""></a>

                                                <form action="{{ route('user.delete.blog-post',$blog->id) }}" method="POST" class="px-2">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"  class="btn btn-danger px-1 py-1"><img src="{{asset('assets/icon/trash-2.svg')}}" alt=""> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <span>Nothing Found...</span>
                                @endforelse
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

            {{$blogs->links()}}

        </div>
    </div>

    <!--// Row end -->


@endsection


