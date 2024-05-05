@extends('layout.index')

@section('content')

<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Déclaration</h3>
		<div class="section-intro">Formulaire de modification d'une déclaration</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form action="{{ route('declarations.update', $declaration->id) }}" method="POST">
                @csrf
                @method('PUT')
                
               
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Element declaré</label>
                    <input type="text" class="form-control" id="setting-input-2" name="elelmentDeclare" value="{{$declaration->elelmentDeclare}}" required>
                </div>
                <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Base déclarée</label>
                    <input type="test" class="form-control" id="setting-input-3" name="baseDeclare" value="{{$declaration->baseDeclare}}">
                </div>
               
                <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Péroide declarée</label>
                    <input type="text" class="form-control" id="setting-input-3" name="periodeDeclare" value="{{$declaration->periodeDeclare}}">
                </div>
                
              
               
                <button type="submit" class="btn app-btn-primary" >Modifier</button>
            </form>
        </div><!--//app-card-body-->
        
    </div><!--//app-card-->
</div>
</div>

@endsection