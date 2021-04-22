@extends('layout.index')

@section('content')
    <div class="container py-2 text-center">
        @include('partials.bo.nav')
        <h2 class="text-center">Dashboard</h2>
        <hr class="w-50">
        <div class="row my-2">
            <div class="col-4 mx-auto">
                <div class="card h-100">
                    <div class="card-header">
                        <h3>Batiment</h3>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Recapitulatif</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="card h-100">
                    <div class="card-header">
                        <h3>Formations</h3>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Recapitulatif</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-4 mx-auto">
                <div class="card h-100">
                    <div class="card-header">
                        <h3>Type de formations</h3>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Recapitulatif</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="card h-100">
                    <div class="card-header">
                        <h3>Eleves</h3>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Recapitulatif</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection