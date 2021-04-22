@extends('layout.index')

@section('content')
    @include('partials.nav')
    <div class="container my-2">
        <h1 class="text-center">les formations</h1>
        <div class="row">
            @foreach ($formations as $formation)
            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h2>{{$formation->nom}}</h2>
                    </div>
                    <div class="card-body">
                        <p>{{$formation->description}}</p>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection