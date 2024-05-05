@extends('layout.index')

@section('content')

<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Agent</h3>
		<div class="section-intro">Formulaire de modification d'un Agent</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form action="{{ route('agents.update', $agent->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Nom Agent</label>
                    <input type="text" class="form-control" name="nom" id="setting-input-2" value="{{$agent->nom}}" required>
                </div>
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Prenom Agent</label>
                    <input type="text" class="form-control" name="prenom" id="setting-input-2" value="{{$agent->prenom}}" required>
                
                <div class="col">
                    <label for="setting-input-3" class="form-label">Département</label>
                    <select class="form-control mr-sm-2" name="departement" id="setting-input-3" name="departement">
                        <option selected>Choisir un departement</option>
                        <option value="Technologie"  {{ $agent->departement == 'Technologie' ? 'selected' : '' }}>Technologie</option>
                        <option value="Finance"  {{ $agent->departement == 'Finance' ? 'selected' : '' }}>Finance</option>
                        <option value="Santé"  {{ $agent->departement == 'Santé' ? 'selected' : '' }}>Santé</option>
                        <option value="Éducation"  {{ $agent->departement == 'Éducation' ? 'selected' : '' }}>Éducation</option>

                    </select>
                    @error("devise")
                    <span style="color:red">{{$message}}</span>

                    @enderror
                </div><br>
                <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="setting-input-3" value="{{$agent->email}}">
                </div>
                
                <button type="submit" class="btn app-btn-primary" >Modifier</button>
            </form>
        </div><!--//app-card-body-->
        
    </div><!--//app-card-->
</div>
</div>

@endsection