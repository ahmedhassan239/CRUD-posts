@extends('layout.app')
@section('content')
    <div class="container">
        <form action="{!!route('update')!!}" method="post" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="id" value="{{$post->id}}/edit">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Post</h3>
                </div>
            </div>
            <div class="form-group">
                <label class="form-inline">Subject</label>
                <input type="text" class="form-control" name="subject" value="{{$post->subject}}" id="subject" placeholder="add subject">
            </div>
            <div class="form-group">
                <label class="form-inline">First Name</label>
                <input type="text" class="form-control" name="firstname" value="{{$post->firstname}}" id="firstname" placeholder="enter your first name">
            </div>
            <div class="form-group">
                <label class="form-inline">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="{{$post->lastname}}" id="lastname" placeholder="enter your last name">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Upload Image</label>
                <input type="file" class="form-control-file" value="{{$post->post_image}}" name="post_image" id="post_image" >
            </div>
            <div class="form-group">
                <label class="form-inline">Comment</label>
                <textarea  class="form-control" name="body"  id="article-ckeditor" placeholder="your Comment" rows="6">{{$post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Update Post</button>
        </form>
    </div>
@endsection