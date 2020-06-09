@extends('cms.master')
@section('content')
<div class="col-md-16" style="width: 730px;">
<div class="card card-defatult">
    <div class="card-header">
        {{ isset($zaposlenik) ? 'Izmijeni zaposlenika' : 'Kreiraj zaposlenika'}}
    </div>
    <div class="card-body">
        <form action="{{ isset($zaposlenik) ? route('zaposlenik.update', $zaposlenik->id) : route('zaposlenik.store') }}" method="POST">
            @csrf
            @if(isset($zaposlenik))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="oibZaposlenik">OIB</label>
                <input type="number" id="oibZaposlenik" class="form-control" name="oibZaposlenik" value="{{ isset($zaposlenik) ? $zaposlenik->oibZaposlenik : ''}}">
            </div>
            <div class="form-group">
                <label for="imeZaposlenik">Ime</label>
                <input type="text" id="imeZaposlenik" class="form-control" name="imeZaposlenik" value="{{ isset($zaposlenik) ? $zaposlenik->imeZaposlenik : ''}}">
            </div>
            <div class="form-group">
                <label for="PrezimeZaposlenik">Prezime</label>
                <input type="text" id="PrezimeZaposlenik" class="form-control" name="PrezimeZaposlenik" value="{{ isset($zaposlenik) ? $zaposlenik->PrezimeZaposlenik : ''}}">
            </div>
            <div class="form-group">
                <label for="datumRodenja">Datum rodenja</label>
                <input type="date" id="datumRodenja" class="form-control" name="datumRodenja" value="{{ isset($zaposlenik) ? $zaposlenik->datumRodenja : ''}}">
            </div>
            @include('layouts.errors')
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($zaposlenik) ? 'Izmijeni zaposlenika' : 'Dodaj zaposlenika' }}
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection