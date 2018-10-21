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
                                <label for="team_name" class="col-md-4 col-form-label text-md-right">{{ __('Team Name') }}</label>

                                <div class="col-md-6">
                                    <input id="team_name" type="text" class="form-control{{ $errors->has('team_name') ? ' is-invalid' : '' }}" name="team_name" value="{{ old('team_name') }}" required autofocus>

                                    @if ($errors->has('team_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-md-4 col-form-label text-md-right">{{ __('Your Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email1" type="email" class="form-control{{ $errors->has('email1') ? ' is-invalid' : '' }}" name="email1" value="{{ old('email1') }}" required>

                                    @if ($errors->has('email1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--2つめ-->
                            <div class="form-group row">
                                <label for="email2" class="col-md-4 col-form-label text-md-right">{{ __('Members Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email2" type="email" class="form-control{{ $errors->has('email2') ? ' is-invalid' : '' }}" name="email2" value="{{ old('email2') }}" required>

                                    @if ($errors->has('email2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email2') }}</strong>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    </body>
</html>
