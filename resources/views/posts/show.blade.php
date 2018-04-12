@extends('layout.app')
@section('content')
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">{{$post->firstname}}-{{$post->lastname}}

                    {{--if for hide delete and edit if you ar guest--}}
                    @if(!Auth::guest())
                        {{--this if for check their is no user can edit or delete post for another user--}}
                        @if(Auth::user()->id==$post->user_id)
                        {{--EDIT button--}}
                        <a href="/posts/{{$post->id}}/edit" class=" btn btn-link pull-right">Edit</a>
                        {{--Delete button--}}
                        <a href="{{route('destroy',$post->id)}}" class="btn btn-link   pull-right">Delete</a>
                        @endif
                    @endif

                </h3>
            </div>
            <div class="panel-body">
                <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:30% ; height:30%; ">
                <h2>{{$post->subject}}</h2>
                <p>{!!$post->body!!}</p>
                <span class="label label-danger">Created at :{{$post->created_at}}</span>
                <span class="label label-info">Posted by {{$post->user->name}}</span>

                <a href="/posts" class="btn  pull-right">Back</a>

            </div>

        </div>
    </div>
@endsection