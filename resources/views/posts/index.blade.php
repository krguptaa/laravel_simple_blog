@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="panel panel-default">
        <div class="panel-heading">
          Blog Posts
          <a href="{{url('posts/create')}}" class="pull-right">New Post</a>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-8 blog-main">
              @foreach ($posts as $post)
              <div class="blog-post">
                <h2 class="blog-post-title"> <a href="{{url('posts/show/'.$post->id)}}">{{$post->title}}</a></h2>
                <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} <a href="#">{{$post->user->name}}</a></p>
                <p>{{$post->body}}</p>
                </div><!-- /.blog-post -->
                @endforeach
                
                <nav>
                  <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                  </ul>
                </nav>
                </div><!-- /.blog-main -->
                 <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                    @include('elements.rightsidebar')
                  </div><!-- /.row -->
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection