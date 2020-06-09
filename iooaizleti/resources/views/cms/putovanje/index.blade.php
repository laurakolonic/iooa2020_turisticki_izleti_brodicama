@extends('cms.master')

@section('content')
<div class="d-flex justify-content-end mb-2" style="width: 730px;">
    <a href="{{ route('putovanje.create') }}" class="btn btn-secondary">Dodaj novo putovanje</a>
    </div>
      <div class="card card-default">
        <div class="card-header">PUTOVANJA</div>
        @if($putovanja->count()>0)
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Datum</th>
                    <th>Vrijeme</th>
                    <th>Brod</th>
                    <th>Brod slika</th>
                    <th>Ruta</th>
                    <th>Ruta slika</th>
                    <th>Zaposlenik</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($putovanja as $putovanje)
                        <tr>
                            <td>
                                {{ $putovanje->datum }}
                            </td>
                            <td>
                                {{ $putovanje->vrijeme }}
                            </td>
                            <td>
                                {{ $putovanje->brod->nazivBrod }}
                            </td>
                           
                                <th>
                                    <img src="/app/public/{{ ($putovanje->brod->image) }}" width=100px height=60px alt="">
                                </th>
        
                            
                            <th>
                                {{ $putovanje->ruta->nazivRuta }}
                            </th>
                            <th>
                                <img src="/app/public/{{ ($putovanje->ruta->image) }}" width=100px height=60px alt="">
                            </th>
                            <th>
                                {{ $putovanje->zaposlenik->imeZaposlenik }} {{ $putovanje->zaposlenik->PrezimeZaposlenik }}
                            </th>
                            <td>
                                <a href="{{ route('putovanje.edit', $putovanje->id) }}" class="btn btn-secondary btn-sm">Izmijeni</a>
                                <button class="btn btn-secondary btn-sm" onclick="handleDelete({{ $putovanje->id }})">Izbriši</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deletePutovanjeForm">
        @method('DELETE')
        @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Izbriši putovanje</h5>
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
                var form=document.getElementById('deletePutovanjeForm')
                form.action='/cms/putovanje/'+id
                console.log('deleting', form)
                $('#deleteModal').modal('show')
            }
        </script>
    @endsection