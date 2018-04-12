@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                            <div class="alert alert-dismissible alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4 class="alert-heading">Congratulations</h4>
                                <p class="mb-0">You are logged on successfully </p>
                            </div>
                        <a href="/posts/create"  class="btn btn-primary btn-lg"> New Post</a>
                        <hr>
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-md-12">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{$post->subject}}

                                                <a href="/posts/{{$post->id}}/edit" class=" btn btn-link pull-right">Edit</a>
                                                <a href="{{route('destroy',$post->id)}}" class="btn btn-link   pull-right">Delete</a>
                                            </h3>

                                        </div>
                                        <div class="panel-body">
                                            {!!$post->body!!}
                                            <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%; height: 30%;">
                                            {{--<a href="/posts/{{$post->id}}" class="btn btn-link pull-right">More</a>--}}

                                        </div>
                                        <div class="panel-footer">
                                            <span class="label label-danger">Created at :{{$post->created_at}}</span>
                                            <span class="label label-info">Posted by {{$post->user->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
