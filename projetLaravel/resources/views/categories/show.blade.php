@extends('layouts.app', ['title' => $categorie->nom])

@section('content')
<div class="container py-4">
    <h1>{{ $categorie->nom }}</h1>

    @if ($categorie->livres->isEmpty())
        <div class="alert alert-info">Aucun livre dans cette catégorie.</div>
    @else
        <div class="row">
            @foreach ($categorie->livres as $livre)
                <div class="col-md-6 col-lg-4 mb-4">
                    <x-livre-card :livre="$livre" />
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
