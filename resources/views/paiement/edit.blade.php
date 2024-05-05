@extends('layout.index')

@section('content')

<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Paiement</h3>
		<div class="section-intro">Formulaire de modification d'un paiement</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form action="{{ route('paiements.update', $paiement->id) }}" method="POST">
                @csrf
                @method('PUT')
               
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Montant paye</label>
                    <input type="text" class="form-control" id="setting-input-2" name="montant" value="{{$paiement->montant}}" required>
                </div>
               
                <div class="col">
                    <label for="setting-input-3" class="form-label">Mode de paiement</label>
                    <select class="form-control mr-sm-2" id="setting-input-3" name="ModePaiement">
                        <option selected>Choisir un mode de paiement</option>
                        <option value="Orange Money"  {{ $paiement->ModePaiement == 'Orange Money' ? 'selected' : '' }}>Orange Money</option>
                        <option value="Wave"  {{ $paiement->ModePaiement == 'Wave' ? 'selected' : '' }}>Wave</option>
                      
                    </select>
                    @error("devise")
                    <span style="color:red">{{$message}}</span>

                    @enderror
                </div><br>

                <div class="col">
                    <label for="setting-input-3" class="form-label">Contribuable</label>
                    <select class="form-control mr-sm-2" id="setting-input-3" name="contribuable_id">
                        <option selected disabled>Sélectionner</option>
                        @foreach($contribuables as $contribuable)
                            <option value="{{ $contribuable->id }}" @if($paiement->contribuable_id == $contribuable->id) selected @endif>{{ $contribuable->ifu }}</option>
                        @endforeach
                    </select>
                    @error("contribuable_id")
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                </div><br>
                
                <button type="submit" class="btn app-btn-primary" >Modifier</button>
            </form>
        </div><!--//app-card-body-->
        
    </div><!--//app-card-->
</div>
</div>

@endsection