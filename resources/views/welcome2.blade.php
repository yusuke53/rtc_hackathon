<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hackathon Accelerator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


    </head>
    <body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('test.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="repository_name" class="col-md-4 col-form-label text-md-right">{{ __('Repository Name') }}</label>

                                <div class="col-md-6">
                                    <input id="repository_name" type="text" class="form-control{{ $errors->has('repository_name') ? ' is-invalid' : '' }}" name="repository_name" value="{{ old('repository_name') }}" required autofocus>

                                    @if ($errors->has('repository_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('repository_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="owner" class="col-md-4 col-form-label text-md-right">{{ __('Owner Name') }}</label>

                                <div class="col-md-6">
                                    <input id="owner" type="text" class="form-control{{ $errors->has('owner') ? ' is-invalid' : '' }}" name="owner" value="{{ old('owner') }}" required>

                                    @if ($errors->has('owner'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('owner') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--2つめ-->
                            <div class="form-group row">
                                <label for="collaborator" class="col-md-4 col-form-label text-md-right">{{ __('Collaborators Name') }}</label>

                                <div class="col-md-6">
                                    <input id="collaborator" type="text" class="form-control{{ $errors->has('collaborator') ? ' is-invalid' : '' }}" name="collaborator" value="{{ old('collaborator') }}" required>

                                    @if ($errors->has('collaborator'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('collaborator') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="access_token" class="col-md-4 col-form-label text-md-right">{{ __('Access Token') }}</label>

                                <div class="col-md-6">
                                    <input id="access_token" type="text" class="form-control{{ $errors->has('access_token') ? ' is-invalid' : '' }}" name="access_token" value="{{ $user->token }}" required>

                                    @if ($errors->has('access_token'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('access_token') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="{{ route('login.github') }}">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    </body>
</html>
