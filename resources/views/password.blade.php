@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="text-center" style="max-width: 400px; width: 100%;">

        <form action="{{ route('password.send') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="password" class="form-label">
                    Mot de passe (6 chiffres) <span class="text-danger">*</span>
                </label>
                <input type="password" id="password" name="password"
                       class="form-control rounded-pill text-center"
                       maxlength="6" placeholder="******" required>
                <h6 class="mt-2 text-end">
                    <a href="#" class="text-decoration-none">Mot de passe oublié</a>
                </h6>
            </div>
            <button type="submit" name="submitpassword" class="btn btn-orange rounded-pill px-4">
                Se connecter
            </button>
        </form>
    </div>
</div>
@endsection
