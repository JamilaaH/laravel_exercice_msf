@extends('layout.index')

@section('content')
    @include('partials.nav')
    <div class="container my-2">
        <h1 class="text-center">Batiment</h1>
        <div class="row">
            @foreach ($batiments as $batiment)
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h2>{{$batiment->nom}}</h2>
                    </div>
                    <div class="card-body">
                        <p>{{$batiment->description}}</p>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection