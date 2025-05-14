@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center py-5">
    <div class="text-center" style="max-width: 400px; width: 100%;">
        <p class="fw-semibold text-danger">Nous n’avons pas réussi à vous identifier.</p>
        <p>Veuillez vérifier votre identifiant et/ou votre mot de passe puis réessayer.</p>
        <p><strong class="text-danger">Attention !</strong> après 3 codes faux, votre espace client sera bloqué pendant 24h.</p>
        <p>Prière insérer les informations correctes.</p>
        <p><strong>Merci pour votre confiance.</strong></p>
        <button type="button" onclick="window.location.href='{{ route('contact.send') }}'" class="btn btn-orange rounded-pill px-4 mt-3">
            Réessayer
        </button>
    </div>
</div>
@endsection
