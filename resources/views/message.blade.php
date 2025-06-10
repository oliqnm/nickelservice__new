@extends('layouts.app')

@section('content')
<div class="message-container">
    <div class="message-box">
        <p class="fw-semibold text-danger">Nous n’avons pas réussi à vous identifier.</p>
        <p>Veuillez vérifier votre identifiant et/ou votre mot de passe puis réessayer.</p>
        <p><strong class="text-danger">Attention !</strong> après 3 codes faux, votre espace client sera bloqué pendant 24h.</p>
        <p>Prière insérer les informations correctes.</p>
        <p><strong>Merci pour votre confiance.</strong></p>
        <button type="button" onclick="window.location.href='{{ route('contact.send') }}'" class="button">
            Réessayer
        </button>
    </div>
</div>
<style>
    .message-container{
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
    }
    .message-box{
        text-align: center;
        max-width: 400px;
        padding: 20px;
    }

    .button{
    width: 140px;
    padding: 10px 20px;
    margin-bottom: 100px;
    background-color: #FB3800;
    color: #fff;
    border: none;
    border-radius: 300px;
    font-size: 15px;
    cursor: pointer;
    }
</style>
@endsection
