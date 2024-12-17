@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>Page de CRUD en LARA</h1>
                <hr>
                <a href="{{ route('etudiant.ajouter') }}" class="btn btn-primary">Ajouter un étudiant</a>
                <br><br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Classe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>KOF</td>
                            <td>Marc</td>
                            <td>tle D</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>KOU</td>
                            <td>Dan</td>
                            <td>tle A</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>KOA</td>
                            <td>Ben</td>
                            <td>tle C</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
