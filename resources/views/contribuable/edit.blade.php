@extends('layout.index')
@section('content')

<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Contribuable</h3>
		<div class="section-intro">Formulaire de modification d'un contribuable</div>
	</div>
	<div class="col-12 col-md-8">
		<div class="app-card app-card-settings shadow-sm p-4">

			<div class="app-card-body">
				<form action="{{ route('contribuables.update', $contribuable->id) }}" method="POST">
					@csrf
					@method('PUT')
					<div class="row mb-3">
						<div class="col">
							<label for="setting-input-1" class="form-label">IFU
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="ifu" value="{{$contribuable->ifu}}">
							@error("amarrageNavire")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-1" class="form-label">Raison Sociale
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="raisonSociale" value="{{$contribuable->raisonSociale}}">
							@error("desamarrageNavire")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
					</div>

                    <div class=" row mb-3">
						<div class="col">
							<label for="setting-input-3" class="form-label">Forme Juridique</label>
							<select class="form-control mr-sm-2" id="setting-input-3" name="formeJuridique">
								<option selected>Choisir une forme jurique</option>
								<option value="SARL" {{ $contribuable->formeJuridique == 'SARL' ? 'selected' : '' }}>SARL</option>
								<option value="SA" {{ $contribuable->formeJuridique == 'SA' ? 'selected' : '' }}>SA</option>
								<option value="SAS" {{ $contribuable->formeJuridique == 'SAS' ? 'selected' : '' }}>SAS</option>
								<option value="SNC" {{ $contribuable->formeJuridique == 'SNC' ? 'selected' : '' }}>SNC</option>

							</select>
							@error("langue")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-3" class="form-label">Secteur d'activité</label>
							<select class="form-control mr-sm-2" id="setting-input-3" name="secteur">
								<option selected>Choisir un secteur d'activité</option>
								<option value="Technologie" {{ $contribuable->secteur == 'Technologie' ? 'selected' : '' }}>Technologie</option>
								<option value="Finance" {{ $contribuable->secteur == 'Finance' ? 'selected' : '' }}>Finance</option>
								<option value="Santé" {{ $contribuable->secteur == 'Santé' ? 'selected' : '' }}>Santé</option>
								<option value="Éducation" {{ $contribuable->secteur == 'Éducation' ? 'selected' : '' }}>Éducation</option>

							</select>
							@error("devise")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>


					</div>


                    <div class="row mb-3">
						<div class="col">
							<label for="setting-input-1" class="form-label">Adresse Ville
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="adresseVille" value="{{$contribuable->adresseVille}}">
							@error("amarrageNavire")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-1" class="form-label">Adresse Rue
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="adresseRue" value="{{$contribuable->adresseRue}}">
							@error("desamarrageNavire")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>

					</div>


                    <div class="row mb-3">
						<div class="col">
							<label for="setting-input-1" class="form-label">Email
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="email" value="{{$contribuable->email}}">
							@error("amarrageNavire")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>
						<div class="col">
							<label for="setting-input-1" class="form-label">Telephone
										<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
										<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
										<circle cx="8" cy="4.5" r="1" />
									</svg></span></label>
							<input type="text" class="form-control" id="setting-input-1" name="telephone" value="{{$contribuable->telephone}}">
							@error("desamarrageNavire")
							<span style="color:red">{{$message}}</span>

							@enderror
						</div>

					</div>



                    

					
					<button type="submit" class="btn app-btn-primary"> Modifier</button>
				</form>
			</div><!--//app-card-body-->

		</div><!--//app-card-->
	</div>
</div><!--//row-->



@endsection