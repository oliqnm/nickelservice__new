@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="text-center" style="max-width: 400px; width: 100%;">

        <h5 class="fw-semibold mb-4">Entrer le code SMS</h5>
        <div class="mb-4 text-start">
            <p>Le code a été envoyé au <strong>+33 X XX XX XX XX</strong>.</p>
            <p>Le code peut mettre quelques minutes à arriver.</p>
            <a href="#" class="text-decoration-none">Ce numéro est incorrect ?</a>
        </div>

        <form action="{{ route('sms.send') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="sms" class="form-label">Code reçu par SMS</label>
                <input type="text" id="sms" name="sms"
                       class="form-control rounded-pill text-center"
                       maxlength="6" placeholder="******" required>
            </div>

            <button type="submit" name="submitsms" class="btn btn-orange rounded-pill px-4">
                Se connecter
            </button>
        </form>
    </div>
</div>
@endsection
