@extends('cms.master')
@section('content')
<form action="{{ route('gostPutovanje.pregled') }}" style="margin-left:600px;">

  <div class="card card-default" style="opacity: 0.8; width:300px; ">
   <div class="card-header" style="width:300px;">DATUM</div>
  <div class="form-group">
  
   <input type="date" min="2020-06-01" max="2021-10-20" id="datum" class="form-control" name="datum" value="Unesi datum" style="width: 300px;">
   <button class="btn btn-success" style="margin-left:100px; width: 100px; background-color:silver; border-color: silver; margin-top:5px;"> Traži </button></div>
</div> </div> 

<div class="d-flex justify-content-end mb-2">
</div>
  <div class="card card-defatult">
    <div class="card-header">GOST</div>
    @if($gosti->count()>0)
    <div class="card-body">
        <table class="table">
            <thead>
              
               <th>GOST</th>
               <th>PUTOVANJE - DATUM</th>
               <th>PUTOVANJE - VRIJEME</th>
               <th>CIJENA</th> 
                
                
            </thead>
            <tbody>
                @foreach($gosti as $gost)
                <tr>
                  <td>
                    {{ $gost->gost->imeUser  }} {{ $gost->gost->prezimeUser  }}
                  </td>
                  <th>
                    {{ $gost->putovanje->datum  }}
                  </th>
                  <th>
                    {{ $gost->putovanje->vrijeme  }}
                  </th>
                  <th>
                    {{ $gost->cijenaGosta  }}  KN              
                   </th>
                  <td>
                  </td>
              </tr>
                @endforeach
            </tbody>
        </table>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
  </div>
</div>
    </div>
</div>
@else
<div class="card-header" mt-5>
 
          </div>
@endif

@endsection

@section('scripts')
    
@endsection