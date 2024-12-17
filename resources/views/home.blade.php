@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Services Section -->
    <section id="services" class="py-5">
        <h2 class="text-center text-primary mb-4">Nos Services</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Consultations">
                    <div class="card-body">
                        <h5 class="card-title">Consultations</h5>
                        <p class="card-text">Des consultations avec des spécialistes expérimentés.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Urgences">
                    <div class="card-body">
                        <h5 class="card-title">Service d'Urgences</h5>
                        <p class="card-text">Disponible 24/7 pour vos besoins urgents.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Analyses">
                    <div class="card-body">
                        <h5 class="card-title">Analyses Médicales</h5>
                        <p class="card-text">Des diagnostics rapides et précis pour votre santé.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <h2 class="text-center text-primary mb-4">À propos de nous</h2>
        <p class="text-center">
            Medical-infoB s'engage à fournir des soins de santé de qualité grâce à une équipe d'experts et des technologies de pointe.
        </p>
    </section>
</div>
@endsection
