@extends('layout.index')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Agent</h3>
		<div class="section-intro">Formulaire d'Ajout d'un Agent</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form class="settings-form" action="{{ route('agents.store') }}" method="POST">
                @csrf

                
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Nom Agent</label>
                    <input type="text" class="form-control" name="nom" id="setting-input-2" value="" required>
                </div>
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Prenom Agent</label>
                    <input type="text" class="form-control" name="prenom" id="setting-input-2" value="" required>
                
                <div class="col">
                    <label for="setting-input-3" class="form-label">Département</label>
                    <select class="form-control mr-sm-2" id="setting-input-3" name="departement">
                        <option selected>Choisir un departement</option>
                        <option value="Technologie">Technologie</option>
                        <option value="Finance">Finance</option>
                        <option value="Santé">Santé</option>
                        <option value="Éducation">Éducation</option>

                    </select>
                    @error("departement")
                    <span style="color:red">{{$message}}</span>

                    @enderror
                </div><br>
                <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="setting-input-3" value="">
                </div>

                <button type="submit" class="btn app-btn-primary" >Enregistrer</button>
            </form>
        </div><!--//app-card-body-->
        
    </div><!--//app-card-->
</div>
</div>

@endsection