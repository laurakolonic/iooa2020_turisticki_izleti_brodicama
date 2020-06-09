@extends('cms.master')
@section('content')
<div class="col-md-16" style="width: 730px;">
<div class="card card-defatult">
    <div class="card-header">
        {{ isset($ruta) ? 'Izmijeni rutu' : 'Kreiraj rutu'}}
    </div>
    <div class="card-body">
        <form action="{{ isset($ruta) ? route('ruta.update', $ruta->id) : route('ruta.store') }}" method="POST">
            @csrf
            @if(isset($ruta))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="nazivRuta">Naziv</label>
                <input type="text" id="nazivRuta" class="form-control" name="nazivRuta" value="{{ isset($ruta) ? $ruta->nazivRuta : ''}}">
            </div>
            <div class="form-group">
                <label for="opisRuta">Opis</label>
                <input type="text" id="opisRuta" class="form-control" name="opisRuta" value="{{ isset($ruta) ? $ruta->opisRuta : ''}}">
            </div>
            @include('layouts.errors')
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($ruta) ? 'Izmijeni rutu' : 'Dodaj rutu' }}
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection