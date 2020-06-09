@extends('cms.master')
@section('content')
<div class="col-md-16" style="width: 730px;">
<div class="card card-defatult">
    <div class="card-header">
        {{ isset($kategorija) ? 'Izmijeni kategoriju' : 'Kreiraj kategoriju'}}
    </div>
    <div class="card-body">
        <form action="{{ isset($kategorija) ? route('kategorija.update', $kategorija->id) : route('kategorija.store') }}" method="POST">
            @csrf
            @if(isset($kategorija))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="nazivKategorija">Naziv kategorije</label>
                <input type="text" id="nazivKategorija" class="form-control" name="nazivKategorija" value="{{ isset($kategorija) ? $kategorija->nazivKategorija : ''}}">
            </div>
            <div class="form-group">
                <label for="godinaRodenja">Godina rođenja</label>
                <input type="date" id="godinaRodenja" class="form-control" name="godinaRodenja" value="{{ isset($kategorija) ? $kategorija->godinaRodenja : ''}}">
            </div>
            <div class="form-group">
                <label for="tekucaGodina">Godina tekuća</label>
                <input type="date" id="tekucaGodina" class="form-control" name="tekucaGodina" value="{{ isset($kategorija) ? $kategorija->tekucaGodina : ''}}">
            </div>
            <div class="form-group">
                <label for="cijena">Cijena</label>
                <input type="number" id="cijena" class="form-control" name="cijena" value="{{ isset($kategorija) ? $kategorija->cijena : ''}}">
            </div>
            @include('layouts.errors')
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($kategorija) ? 'Izmijeni kategoriju' : 'Dodaj kategoriju' }}
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection