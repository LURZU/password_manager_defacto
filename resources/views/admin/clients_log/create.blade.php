@extends('admin.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Login Info for {{ $client->name }}</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('admin.login_infos.store', $client->id) }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('platform') ? ' has-error' : '' }}">
                                <label for="platform" class="col-md-4 control-label">Platform</label>

                                <div class="col-md-6">
                                    <input id="platform" type="text" class="form-control" name="platform" value="{{ old('platform') }}" required autofocus>

                                    @if ($errors->has('platform'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('platform') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('platform_link') ? ' has-error' : '' }}">
                                <label for="platform_link" class="col-md-4 control-label">Platform Link</label>

                                <div class="col-md-6">
                                    <input id="platform_link" type="text" class="form-control" name="platform_link" value="{{ old('platform_link') }}" required autofocus>

                                    @if ($errors->has('platform_link'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('platform_link') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                                <label for="login" class="col-md-4 control-label">Login</label>

                                <div class="col-md-6">
                                    <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required autofocus>

                                    @if ($errors->has('login'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('login') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Add Login Info
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
