<!-- resources/views/layouts/header.blade.php -->
<header class="header">
    <div class="logo">
        <img src="{{ asset('assets/images/logo-compte-nickel.jpg') }}" alt="Logo Nickel" class="logo-img">
       
    </div>
</header>
<style>
.header {
    justify-content: center;
    align-items:center;
    padding-top: 1rem;
}

.logo {
    margin-top:20px;
    display: inline-block;
}

.logo-img {
    height: 40px;
}

.header-title {
    font-weight: 600;
    text-align: center;
    margin-top: 0.5rem;
}

@media (max-width: 768px) {
    .nickel-login-box {
        padding: 15px;
        max-width: 90%;
    }

    .nickel-title {
        font-size: 1.3rem;
    }

    .nickel-description {
        font-size: 0.95rem;
    }

    .nickel-card img {
        max-width: 100%;
        height: auto;
    }

    .nickel-input {
        width: 100%;
    }

    .nickel-button {
        width: 100%;
        font-size: 1rem;
    }

    .nickel-checkbox {
        flex-direction: row;
        justify-content: flex-start;
        font-size: 0.9rem;
    }
}


</style>