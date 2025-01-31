@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Créer un Élément Constitutif (EC)</h1>
    <form action="{{ route('ecs.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="code" class="block text-sm font-medium">Code de l'EC</label>
            <input type="text" name="code" id="code" class="mt-1 block w-full border-gray-300 rounded-lg" required>
        </div>
        <div>
            <label for="name" class="block text-sm font-medium">Nom de l'EC</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-lg" required>
        </div>
        <div>
            <label for="coefficient" class="block text-sm font-medium">Coefficient</label>
            <input type="number" step="0.01" name="coefficient" id="coefficient" class="mt-1 block w-full border-gray-300 rounded-lg" required>
        </div>
        <div>
            <label for="ue_id" class="block text-sm font-medium">UE associée</label>
            <select name="ue_id" id="ue_id" class="mt-1 block w-full border-gray-300 rounded-lg" required>
                @foreach ($ues as $ue)
                <option value="{{ $ue->id }}">{{ $ue->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="teacher_id" class="block text-sm font-medium">Enseignant Responsable</label>
            <select name="teacher_id" id="teacher_id" class="mt-1 block w-full border-gray-300 rounded-lg">
                <option value="">Non assigné</option>
                @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Créer</button>
    </form>
</div>
@endsection
