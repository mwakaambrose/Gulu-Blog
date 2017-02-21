@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p><strong>Dashboard</strong> <button class="btn btn-success pull-right">My Posts</button></p>
                </div>

                <div class="panel-body">

                     <form class="form-horizontal" role="form" method="POST" action="/post">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="title" required autofocus placeholder="That awesome story title">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subtitle" placeholder="Optional subtitle">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <textarea class="form-control" name="body" style="height: 300px;" placeholder="Tell your story here"></textarea>
                            </div>
                            @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success" value="Publish" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
