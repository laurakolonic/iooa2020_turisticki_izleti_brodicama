@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potvrdite Vašu E-mail adresu.') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Nova poveznica za potvrdu Vam je poslana na E-mail.') }}
                        </div>
                    @endif

                    {{ __('Prije nastavka, povrdite Vašu E-mail adresu.') }}
                    {{ __('Ukoliko niste dobili E-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kliknite ovdje za novu poveznicu.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
