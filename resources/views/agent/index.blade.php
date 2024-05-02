@extends('layout.index')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h1 class="app-page-title mb-0">Agents</h1>
	</div>
	<div class="col-auto">
		<div class="page-utilities">
			<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
				<div class="col-auto">
					<form class="table-search-form row gx-1 align-items-center" action="" method="get">
						@csrf
						<div class="col-auto">
							<input type="text" id="search-orders" name="searchClient" class="form-control search-orders" placeholder="Recherche" >
						</div>
						<div class="col-auto">
							<button type="submit" class="btn app-btn-secondary">Rechercher</button>
						</div>
					</form>

				</div><!--//col-->

				<div class="col-auto">
					<a class="btn app-btn-secondary" href="{{route('agents.create')}}">

						Ajouter un Agent
					</a>
				</div>
			</div><!--//row-->
		</div><!--//table-utilities-->
	</div><!--//col-auto-->
</div><!--//row-->

@if(session('success'))
<div class="alert alert-success mt-5">
	{{session('success')}}
</div>

@endif

<div class="tab-content" id="orders-table-tab-content">
	<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
		<div class="app-card app-card-orders-table shadow-sm mb-5">
			<div class="app-card-body">
				<div class="table-responsive">
					<table class="table app-table-hover mb-0 text-left">
						<thead>
							<tr>
								<th class="cell">#Num</th>
                                <th class="cell">Matricule</th>
								<th class="cell">Nom</th>
								<th class="cell">Prenom</th>
								<th class="cell">Departement</th>
								<th class="cell">Email</th>
                               
								<th class="cell">Actions</th>
								<th class="cell"></th>
							</tr>
						</thead>

						<tbody>
							@php
							$numero=1;
							@endphp

						@foreach($agents as $index => $agent)
							<tr>
									<td class="cell">{{ $index + 1 }}</td>
                                    <td class="cell">{{ $agent->matricule }}</td>
                                    <td class="cell">{{ $agent->nom }}</td>
                                    <td class="cell">{{ $agent->prenom }}</td>
                                    <td class="cell">{{ $agent->departement }}</td>
                                    <td class="cell">{{ $agent->email }}</td>
                                  
								<td class="cell"><a class="btn btn-secondary" href="{{ route('agents.edit', ['agent' => $agent->id]) }}" style="color:white;">Modifier</a></td>
								<td class="cell">
									<form action="{{ route('agents.destroy', $agent->id) }}" method="POST">
										@csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" style="color:white;">Supprimer</button>
                                    </form>
									
								</td>

							</tr>
							@endforeach
							@php
							$numero++;
							@endphp
							
							
							
						</tbody>

					</table>
				</div><!--//table-responsive-->

			</div><!--//app-card-body-->
		</div><!--//app-card-->
		<nav class="app-pagination">
    <ul class="pagination justify-content-center">
        {{-- Lien vers la page précédente --}}
        

        {{-- Lien vers chaque page --}}
       
		

        {{-- Lien vers la page suivante --}}
        
    </ul>
</nav><!--//app-pagination-->

	</div><!--//tab-pane-->

	
</div><!--//tab-content-->



@endsection