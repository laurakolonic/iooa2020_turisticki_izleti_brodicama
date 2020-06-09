@extends('cms.master')

@section('content')
<div class="d-flex justify-content-end mb-2" style="width: 730px;">
    <a href="{{ route('kategorija.create') }}" class="btn btn-secondary">Dodaj novu kategoriju</a>
    </div>
      <div class="card card-default">
        <div class="card-header">KATEGORIJE</div>
        @if($kategorije->count()>0)
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Naziv kategorije</th>
                    <th>Godina rođenja</th>
                    <th>Tekuća godina</th>
                    <th>Cijena</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($kategorije as $kategorija)
                        <tr>
                            <td>
                                {{ $kategorija->nazivKategorija }}
                            </td>
                            <td>
                                {{ $kategorija->tekucaGodina }}
                            </td>
                            <td>
                                {{ $kategorija->godinaRodenja }}
                            </td>
                            <th>
                                {{ $kategorija->cijena }}
                            </th>
                            <td>
                                <a href="{{ route('kategorija.edit', $kategorija->id) }}" class="btn btn-secondary btn-sm">Izmijeni</a>
                                <button class="btn btn-secondary btn-sm" onclick="handleDelete({{ $kategorija->id }})">Izbriši</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteKategorijaForm">
        @method('DELETE')
        @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Izbriši kategoriju</h5>
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
                var form=document.getElementById('deleteKategorijaForm')
                form.action='/cms/kategorija/'+id
                console.log('deleting', form)
                $('#deleteModal').modal('show')
            }
        </script>
    @endsection