@extends('cms.master')
@section('content')
<div class="col-md-16" style="width: 730px;">
<div class="card card-defatult">
    <div class="card-header">
        {{ isset($putovanje) ? 'Izmijeni putovanje' : 'Kreiraj putovanje'}}
    </div>
    <div class="card-body">
        <form action="{{ isset($putovanje) ? route('putovanje.update', $putovanje->id) : route('putovanje.store') }}" method="POST">
            @csrf
            @if(isset($putovanje))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="datum">Datum</label>
                <input type="date" id="datum" class="form-control" name="datum" value="{{ isset($putovanje) ? $putovanje->datum : ''}}">
            </div>
            <div class="form-group">
                <label for="vrijeme">Vrijeme</label>
                <input type="time" id="vrijeme" class="form-control" name="vrijeme" value="{{ isset($putovanje) ? $putovanje->vrijeme : ''}}">
            </div>
            
            <div class="form-group">
                <label for="brod">Brod</label>
                <select name="brod" id="brod" class="form-control">
                    @foreach($brodovi as $brod)
                        <option value="{{ $brod->id }}"> {{ $brod->nazivBrod }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ruta">Ruta</label>
                <select name="ruta" id="ruta" class="form-control">
                    @foreach($rute as $ruta)
                        <option value="{{ $ruta->id }}"> {{ $ruta->nazivRuta }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="cijena">Cijena</label>
                <input type="number" id="cijena" class="form-control" name="cijena" value="{{ isset($putovanje) ? $putovanje->cijena : ''}}">
            </div>

            @include('layouts.errors')
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($putovanje) ? 'Izmijeni putovanje' : 'Dodaj putovanje' }}
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection