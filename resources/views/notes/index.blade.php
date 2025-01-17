@extends('layouts.app')

@section('title', 'Liste des UEs')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des UEs</h1>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">Code</th>
                <th class="border border-gray-300 px-4 py-2">Nom</th>
                <th class="border border-gray-300 px-4 py-2">ECTS</th>
                <th class="border border-gray-300 px-4 py-2">Semestre</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ues as $ue)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $ue->code }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $ue->nom }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $ue->credits_ects }}</td>
                <td class="border border-gray-300 px-4 py-2">S{{ $ue->semestre }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('ues.edit', $ue) }}" class="text-blue-500">Modifier</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
