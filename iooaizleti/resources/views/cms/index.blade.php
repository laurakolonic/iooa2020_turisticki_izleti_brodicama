@extends('cms.master')

@section('succeslogin')
           
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                <div class="card">
                <div class="card-header">Uspješno ste prijavljeni kao administartor.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Odaberite neku od opcija iz navigacije za daljnji rad s aplikacijom.
                    
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection
           