@extends('cms.master')

@section('content')
<div class="d-flex justify-content-end mb-2" style="width: 730px;">
    <a href="{{ route('zaposlenik.create') }}" class="btn btn-secondary">Dodaj novog zaposlenika</a>
    </div>
      <div class="card card-defatult">
        <div class="card-header">ZAPOSLENICI</div>
        @if($zaposlenici->count()>0)
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Datum rođenja</th>
                    
                </thead>
                <tbody>
                    @foreach($zaposlenici as $zaposlenik)
                        <tr>
                            <td>
                                {{ $zaposlenik->imeZaposlenik }}
                            </td>
                            <td>
                                {{ $zaposlenik->PrezimeZaposlenik }}
                            </td>
                            <td>
                                {{ $zaposlenik->datumRodenja }}
                            </td>
                            
                            <td>
                                <a href="{{ route('zaposlenik.edit', $zaposlenik->id) }}" class="btn btn-secondary btn-sm">Izmijeni</a>
                                <button class="btn btn-secondary btn-sm" onclick="handleDelete({{ $zaposlenik->id }})">Izbriši</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteZaposlenikForm">
        @method('DELETE')
        @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Izbriši zaposlenika</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <p class="text-center text-bold">Želite li stvarno izbrisati podatak ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Odustani.</button>
            <button type="submit" class="btn btn-danger">Potvrdi.</button>
          </div>
        </div>
        </form>
      </div>
    </div>
        </div>
    </div>
    @else
    <div class="card-header" mt-5>
        <h4 class="text-center">Nema podataka.</h4>
        
        </div>
    @endif
    
    @endsection
    
    @section('scripts')
        <script>
            function handleDelete(id){
                var form=document.getElementById('deleteZaposlenikForm')
                form.action='/cms/zaposlenik/'+id
                console.log('deleting', form)
                $('#deleteModal').modal('show')
            }
        </script>
    @endsection