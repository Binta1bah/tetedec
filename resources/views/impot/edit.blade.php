@extends('layout.index')

@section('content')

<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Impôt</h3>
		<div class="section-intro">Formulaire de modification d'un Impôt</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form class="settings-form">
                <div class="mb-3">
                    <label for="setting-input-1" class="form-label">Numero Matricule<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
<circle cx="8" cy="4.5" r="1"/>
</svg></span></label>
                    <input type="text" class="form-control" id="setting-input-1" value="" required>
                </div>
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Nature Impôt</label>
                    <input type="text" class="form-control" id="setting-input-2" value="" required>
                </div>
                <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Taux Impôt</label>
                    <input type="email" class="form-control" id="setting-input-3" value="">
                </div>
               
                <div class="col">
                    <label for="setting-input-3" class="form-label">Déclaration</label>
                    <select class="form-control mr-sm-2" id="setting-input-3" name="devise">
                        <option selected>Selectionner</option>
                        <option value="fcfa">test</option>
                        <option value="euro">test</option>
                        
                    </select>
                    @error("devise")
                    <span style="color:red">{{$message}}</span>

                    @enderror
                </div><br>
                
                <button type="submit" class="btn app-btn-primary" >Modifier</button>
            </form>
        </div><!--//app-card-body-->
        
    </div><!--//app-card-->
</div>
</div>

@endsection