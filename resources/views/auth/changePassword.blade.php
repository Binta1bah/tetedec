@extends('layout.index')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">

		<h3 class="section-title">Reinitialisation de mot de passe</h3>
		<div class="section-intro">Veuillez reinitialiser votre mot de passe pour continuer</div>
	</div>
<div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
        
        <div class="app-card-body">
            <form class="settings-form" action="{{ route('password.update') }}" method="POST">
                @csrf

                
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Nouveau mot de passe</label>
                    <input type="text" class="form-control" name="password" id="setting-input-2" value="{{ old('password') }}" required>
                </div>
                <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Confirmation</label>
                    <input type="text" class="form-control" name="confirmation" id="setting-input-2" value="{{ old('confirmation') }}" required>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                
                <button type="submit" class="btn app-btn-primary" >Modifier</button>
            </form>
        </div><!--//app-card-body-->
        
    </div><!--//app-card-->
</div>
</div>

@endsection