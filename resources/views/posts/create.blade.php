@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Creat a new post</div>
                <div class="panel-body">
                    <div class="col-sm-8 blog-main">
                        <form class="form-horizontal" method="POST" action="store">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>
                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="col-md-4 control-label">Body</label>
                                <div class="col-md-6">
                                    <textarea id="body" name="body" class="form-control">
                                    </textarea>
                                    
                                    @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                    Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                        @include('elements.rightsidebar')
                        </div><!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection