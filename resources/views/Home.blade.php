<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Notes</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<h1>Bienvenue sur Gestion des Notes</h1>
<p>Cette page d'accueil est prête à être personnalisée.</p>
@endsection

    <a href="{{ route('ues.index') }}">Gérer les UEs</a>
    <a href="{{ route('ecs.index') }}">Gérer les ECs</a>
    <a href="{{ route('notes.index') }}">Gérer les Notes</a>
</body>
</html>
