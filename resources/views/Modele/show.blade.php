@extends('layouts.app')

@section('content')
<div class="container- shadow p-3 mb-5 bg-body rounded">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h2 class="text-center text-primary shadow p-3 mb-5 bg-body rounded">Détail du modèle {{$finds->id}}</h2>
            </marquee>
            <a href="{{route('gestion_modele.index') }}">
                <button type="submit" class="btn btn-success mb-2" style="width:100px">Retour</button>
            </a>
            <div class="card mb-3 shadow p-3 bg-body rounded" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <h5 class="card-title text-center text-primary">Détail Modèle</h5>
                            <img src="{{asset('storage').'/'.$finds->photo}}" style="width:500px;height:400px" alt="">
                        </div> <br>
                        <div class="card-body col-md-8">
                            <p class="card-text">Nom: {{$finds->nom}}</p>
                            <p class="card-text text-danger">Prix: {{$finds->prix}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection