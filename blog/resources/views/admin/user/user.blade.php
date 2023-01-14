@extends('admin.master')

    @section('admin-body')
        <table class="table table-hover">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>User Image</th>
                <td>Date</td>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration  }}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>
                        <img src="{{$user->profile_photo_url}}" alt="User Image" width="50px">
                    </td>
                    <td>
                        {{$user->created_at->diffForhumans()}}
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="pagination">
            {{$users->links()}}
        </div>

    @endsection
