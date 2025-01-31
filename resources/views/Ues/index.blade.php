@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Éléments Constitutifs (ECs)</h1>
    <a href="{{ route('ecs.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter un EC</a>
    <table class="w-full mt-4 border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Code</th>
                <th class="border p-2">Nom</th>
                <th class="border p-2">Coefficient</th>
                <th class="border p-2">UE</th>
                <th class="border p-2">Enseignant</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ecs as $ec)
            <tr class="border">
                <td class="border p-2">{{ $ec->code }}</td>
                <td class="border p-2">{{ $ec->name }}</td>
                <td class="border p-2">{{ $ec->coefficient }}</td>
                <td class="border p-2">{{ $ec->ue->name }}</td>
                <td class="border p-2">{{ $ec->teacher?->name ?? 'Non assigné' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
