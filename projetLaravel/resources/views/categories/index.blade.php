@extends('layouts.app', ['title' => 'Catégories'])

@section('content')
<div class="container">
    <h1>Catégories</h1>

    <ul class="list-group">
        @foreach ($categories as $categorie)
            <li class="list-group-item">
                <a href="{{ route('categories.show', $categorie->slug) }}">
                    {{ $categorie->nom }}
                </a>
                <span class="ms-2">
                    ({{ $categorie->livres_count }} livre(s))
                </span>
            </li>
        @endforeach
    </ul>
</div>
@endsection
