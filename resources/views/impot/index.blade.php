@extends('layout.index')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h1 class="app-page-title mb-0">Impôts</h1>
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
					<a class="btn app-btn-secondary" href="{{route('impot.ajout')}}">

						Ajouter un Impôt
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
                                <th class="cell">Numero matricule</th>
								<th class="cell">Nature impôt</th>
								<th class="cell">Taux impôt</th>
								<th class="cell">Num declaration</th>
                               
								<th class="cell">Actions</th>
								<th class="cell"></th>
							</tr>
						</thead>

						<tbody>
							@php
							$numero=1;
							@endphp

						@foreach($impots as $index => $impot)
							<tr>
								<td class="cell">{{ $index + 1 }}</td>
								<td class="cell">{{ $impot->matricule }}</td>
								<td class="cell">{{ $impot->nature }}</td>
                                <td class="cell">{{ $impot->taux }}</td>
                                <td class="cell">{{ $impot->declaration_id }}</td>
                               
								<td class="cell"><a class="btn btn-secondary" href="{{route('impots.edit', ['impot' => $impot->id])}}" style="color:white;">Modifier</a></td>
								<td class="cell">
									<form action="{{ route('impots.destroy', $impot->id) }}" method="POST">
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