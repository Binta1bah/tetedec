@extends('layout.index')

@section('content')

<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Paiement</h3>
		<div class="section-intro">Formulaire d'Ajout d'un paiement</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form class="settings-form" action="{{ route('paiements.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Montant paye</label>
                    <input type="text" class="form-control" id="setting-input-2" name="montant" value="" required>
                </div>
               
                <div class="col">
                    <label for="setting-input-3" class="form-label">Mode de paiement</label>
                    <select class="form-control mr-sm-2" id="setting-input-3" name="ModePaiement" name="devise">
                        <option selected>Selectionner</option>
                        <option value="Orange Money">Orange Money</option>
                        <option value="Wave">Wave</option>
                        
                    </select>
                    @error("devise")
                    <span style="color:red">{{$message}}</span>

                    @enderror
                </div><br>

                <div class="col">
                    <label for="setting-input-3" class="form-label">Contribuable</label>
                    <select class="form-control mr-sm-2" id="setting-input-3" name="contribuable_id">
                        @foreach($contribuables as $contribuable)
                        <option value="{{ $contribuable->id }}">{{ $contribuable->ifu }}</option>
                         @endforeach
                        
                    </select>
                    @error("devise")
                    <span style="color:red">{{$message}}</span>

                    @enderror
                </div><br>
                
                <button type="submit" class="btn app-btn-primary" > Enregistrer </button>
            </form>
        </div><!--//app-card-body-->
        
    </div><!--//app-card-->
</div>
</div>

@endsection