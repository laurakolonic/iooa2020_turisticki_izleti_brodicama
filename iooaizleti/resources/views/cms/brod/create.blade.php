@extends('cms.master')
@section('content')
<div class="col-md-16" style="width: 730px;" >
<div class="card card-default">
    <div class="card-header">
        {{ isset($brod) ? 'Izmijeni brod' : 'Kreiraj brod'}}
    </div>
    <div class="card-body" >
        <form action="{{ isset($brod) ? route('brod.update', $brod->id) : route('brod.store') }}" method="POST">
            @csrf
            @if(isset($brod))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="nazivBrod">Naziv</label>
                <input type="text" id="nazivBrod" class="form-control" name="nazivBrod" value="{{ isset($brod) ? $brod->nazivBrod : ''}}">
            </div>
            <div class="form-group">
                <label for="opisBrod">Opis</label>
                <input type="text" id="opisBrod" class="form-control" name="opisBrod" value="{{ isset($brod) ? $brod->opisBrod : ''}}">
            </div>
            @include('layouts.errors')
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($brod) ? 'Izmijeni brod' : 'Dodaj brod' }}
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection