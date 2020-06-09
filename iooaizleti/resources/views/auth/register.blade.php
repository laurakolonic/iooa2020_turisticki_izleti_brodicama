@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Prijavi se') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="imeUser" class="col-md-4 col-form-label text-md-right">{{ __('Ime:') }}</label>

                            <div class="col-md-6">
                                <input id="imeUser" type="text" class="form-control @error('imeUser') is-invalid @enderror" name="imeUser" value="{{ old('imeUser') }}" required autocomplete="imeUser" autofocus>

                                @error('imeUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prezimeUser" class="col-md-4 col-form-label text-md-right">{{ __('Prezime:') }}</label>

                            <div class="col-md-6">
                                <input id="prezimeUser" type="text" class="form-control @error('prezimeUser') is-invalid @enderror" name="prezimeUser" value="{{ old('prezimeUser') }}" required autocomplete="prezimeUser" autofocus>

                                @error('prezimeUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="oibUser" class="col-md-4 col-form-label text-md-right">{{ __('OIB:') }}</label>

                            <div class="col-md-6">
                                <input id="oibUser" type="number" class="form-control @error('oibUser') is-invalid @enderror" name="oibUser" value="{{ old('oibUser') }}" required autocomplete="oibUser" autofocus>

                                @error('oibUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="datumRodenja" class="col-md-4 col-form-label text-md-right">{{ __('Datum rođenja:') }}</label>

                            <div class="col-md-6">
                                <input id="datumRodenja" type="date" class="form-control @error('datumRodenja') is-invalid @enderror" name="datumRodenja" value="{{ old('datumRodenja') }}" required autocomplete="datumRodenja" autofocus>

                                @error('datumRodenja')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registriraj se') }}
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
