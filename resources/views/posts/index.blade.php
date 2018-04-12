@extends('layout.app')
@section('content')
    <div class="content">
        <div class="container">
            <h1>Posts</h1>
          @if(count($posts)>0)
              <div class="row">
                  @foreach($posts as $post)
                      <div class="col-md-6 ">
                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                  <h2 class="panel-title">{{$post->firstname}}-{{$post->lastname}} </h2>
                              </div>
                              <div class="panel-body">
                                  <h2>{{$post->subject}}</h2>
                                  <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" width="304" height="236">
                                  <span class="label label-danger">Created at :{{$post->created_at}}</span>
                                  <span class="label label-info">Posted by {{$post->user->name}}</span>
                                  <a href="/posts/{{$post->id}}" class="btn btn-link pull-right">More</a>
                              </div>
                          </div>
                      </div>
                      @endforeach
                  {{--links() used when i use paginate to show other posts as pagination links --}}
                  {{$posts->links()}}
              </div>
              @else
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh !</strong> <a href="#" class="alert-link">No Posts found !!</a> and try submitting again.
                </div>
          @endif


        </div>
    </div>
@endsection