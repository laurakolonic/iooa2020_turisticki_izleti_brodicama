@extends('cms.master')
@section('content')
<div class="d-flex justify-content-end mb-2">
  <a href="{{ route('brod.create') }}" class="btn btn-secondary">Dodaj novi brod</a>
</div>
  <div class="card card-defatult">
    <div class="card-header">BROD</div>
    @if($brodice->count()>0)
    <div class="card-body">
        <table class="table">
            <thead>
                <th>NAZIV</th>
                <th>OPIS</th>
                
                <th>SLIKA</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($brodice as $brod)
                    <tr>
                        <td>
                            {{ $brod->nazivBrod  }}
                        </td>
                        <th>
                            {{ $brod->opisBrod  }}
                        </th>
                      
                        <th>
                            <img src="/app/public/{{ ($brod->image) }}" width=100px height=60px alt="">
                        </th>
                        <td>
                          <a href="{{ route('brod.edit', $brod->id) }}" class="btn btn-secondary btn-sm">Izmijeni</a>
                                <button class="btn btn-secondary btn-sm" onclick="handleDelete({{ $brod->id }})">Izbriši</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="" method="POST" id="deleteBrodForm">
    @method('DELETE')
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Izbriši brod</h5>
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
                var form=document.getElementById('deleteBrodForm')
                form.action='/cms/brod/'+id
                console.log('deleting', form)
                $('#deleteModal').modal('show')
            
    </script>
@endsection