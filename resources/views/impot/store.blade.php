@extends('layout.index')

@section('content')

<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Impôt</h3>
		<div class="section-intro">Formulaire d'Ajout d'un Impôt</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form class="settings-form" action="{{ route('impots.store') }}" method="POST">
                @csrf
               
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Nature Impôt</label>
                    <input type="text" class="form-control" id="setting-input-2" name="nature" value="" required>
                </div>
                <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Taux Impôt</label>
                    <input type="text" class="form-control" id="setting-input-3" name="taux" value="">
                </div>
               
                <div class="col">
                    <label for="setting-input-3" class="form-label">Declaration</label>
                    <select class="form-control mr-sm-2" id="setting-input-3" name="declaration_id">
                        @foreach($declarations as $declaration)
                        <option value="{{ $declaration->id }}">{{ $declaration->numero }}</option>
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