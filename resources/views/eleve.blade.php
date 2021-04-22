@extends('layout.index')

@section('content')
    @include('partials.nav')
    <div class="container my-2">
        <h1 class="text-center">Eleves</h1>
        <div class="row">
            @foreach ($eleves as $eleve)
            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">{{$eleve->nom}}</h5>
                    </div>
                    <div class="card-body">
                        <p>{{$eleve->nom}} {{$eleve->prenom}}</p>
                        <p>{{$eleve->age}} ans</p>
                        @if ($eleve->etat == 1)
                            <p>demandeur d'emploi</p>
                        @else
                            <p>etudiant</p>
                        @endif
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection