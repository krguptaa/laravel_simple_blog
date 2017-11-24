@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Single Blog
                    <a href="{{url('posts/')}}" class="pull-right">Back</a>
                </div>
                <div class="panel-body">
                    
                    <div class="col-sm-8 blog-main">
                        <h1>{{$post->title}}</h1>
                        {{$post->body}}

                        @if ($post->comments)
                            <hr>
                        <div class="comments">
                            <ul class="list-group">
                                @foreach ($post->comments as $comment)
                                
                                <li class="list-group-item">
                                    <p>
                                        <span class="pull-left">Commented by&nbsp;<strong>{{$comment->user->name}}</strong></span>
                                        <span class="pull-right"><strong>
                                            {{$comment->created_at->diffForHumans()}}
                                        </strong></span>
                                        <br>
                                        <p>{{$comment->body}}</p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <hr>
                            <!--
                            @$GK
                            Date : 22nd Nov 2017
                            For comment box
                            -->
                            <div class="card">
                                <div class="card-block">
                                    <form method="post" action="/posts/{{$post->id}}/comments">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <textarea name="body" id="body" placeholder="Your comment here." class="form-control"   >
                                            
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Add Comment</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                            @include('elements.rightsidebar')
                            </div><!-- /.row -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection