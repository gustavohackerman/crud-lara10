<!-- resources/views/etudiant/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un nouvel étudiant</h1>
        <form method="POST" action="{{ route('etudiant.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse" class="form-control" required>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
