@extends('layouts.app')
@section('content')
		<div class="container-login100 container">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('images/consultation-medicale.jpg')}});">
					<span class="login100-form-title-1">
						Authentification
					</span>
				</div>
				<div class="login100-form">
					<form class=" validate-form" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Identifiant</span>
							<div class="">
								<input id="email" type="email" class="input100  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre login">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
							<span class="label-input100">Mot de passe</span>
							<div class="">
								<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer votre mot de passe">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<span class="focus-input100"></span>
						</div>

						<div class="flex-sb-m w-full p-b-30">
							@if (Route::has('password.request'))
								<a class="" href="{{ route('password.request') }}">
									Mot de passe oublié?
								</a>
							@endif
						</div>
						<div class="container-login100-form-btn" style="width:120px;">
							<button class="login100-form-btn btn btn-success" >
								Se Connecter
							</button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
@endsection
