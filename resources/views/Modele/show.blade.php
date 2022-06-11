@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h2 class="text-center text-primary shadow p-3 mb-5 bg-body rounded">Détail du modèle {{$finds->id}}</h2>
            </marquee>
            <div class="card m-3 shadow p-3 bg-body rounded" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title text-center text-primary">Détail Modèle</h5>
                            <p class="card-text">Nom: {{$finds->nom}}</p>
                            <p class="card-text">Prix: {{$finds->prix}}</p>
                            <p class="card-text">Photo: {{$finds->photo}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection