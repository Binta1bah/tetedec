@extends('layout.index')

@section('content')

<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Déclaration</h3>
		<div class="section-intro">Formulaire d'Ajout d'une declaration</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form class="settings-form" action="{{ route('declarations.store') }}" method="POST">
                @csrf
               
                
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Element declaré</label>
                    <input type="text" class="form-control" id="setting-input-2" name="elelmentDeclare" value="" required>
                </div>
                <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Base déclarée</label>
                    <input type="text" class="form-control" id="setting-input-3" name="baseDeclare" value="">
                </div>
               
                <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Péroide declarée</label>
                    <input type="text" class="form-control" id="setting-input-3" name="periodeDeclare" value="">
                </div>
                
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
               
                <button type="submit" class="btn app-btn-primary" >Ajouter Declaration</button>
            </form>
        </div><!--//app-card-body-->
        
    </div><!--//app-card-->
</div>
</div>

@endsection