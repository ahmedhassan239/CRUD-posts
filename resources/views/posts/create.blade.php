@extends('layout.app')
@section('content')
   <div class="container">
       <form action="{{route('posts.store')}}" method="post" role="form" enctype="multipart/form-data">
           {{ csrf_field() }}
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <h3 class="panel-title">Create Post</h3>
               </div>
           </div>
           <div class="form-group">
               <label class="form-inline">Subject</label>
               <input type="text" class="form-control" name="subject" id="subject" placeholder="add subject">
           </div>
           <div class="form-group">
               <label class="form-inline">First Name</label>
               <input type="text" class="form-control" name="firstname" id="firstname" placeholder="enter your first name">
           </div>
           <div class="form-group">
               <label class="form-inline">Last Name</label>
               <input type="text" class="form-control" name="lastname" id="lastname" placeholder="enter your last name">
           </div>
           <div class="form-group">
               <label for="exampleInputFile">Upload Image</label>
               <input type="file" class="form-control-file" name="post_image" id="post_image" >
           </div>
           <div class="form-group">
               <label class="form-inline">Comment</label>
               <textarea  class="form-control" name="body"  id="article-ckeditor" placeholder="your Comment" rows="6"></textarea>
           </div>
           <button type="submit" class="btn btn-primary btn-lg">Create</button>
       </form>
   </div>
    @endsection 