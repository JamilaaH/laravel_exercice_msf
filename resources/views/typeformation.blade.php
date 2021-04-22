@extends('layout.index')

@section('content')
    @include('partials.nav')
    <div class="container my-2">
        <h1 class="text-center">Type de formations</h1>
        <div class="row">
            @foreach ($typeformations as $typeformation)
            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$typeformation->nom}}</h4>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection