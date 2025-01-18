@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded-lg">
  <h1 class="text-2xl font-bold mb-6">Créer une nouvelle UE</h1>
  <form method="POST" action="{{ route('ues.store') }}">
    @csrf
    <div class="space-y-6">
      <div>
        <label for="code" class="block text-sm font-medium text-gray-700">Code de l'UE</label>
        <input
          type="text"
          id="code"
          name="code"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
          placeholder="Entrez le code de l'UE"
        />
      </div>
      <div>
        <label for="nom" class="block text-sm font-medium text-gray-700">Nom de l'UE</label>
        <input
          type="text"
          id="nom"
          name="nom"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        />
      </div>
      <div>
        <label for="credits_ects" class="block text-sm font-medium text-gray-700">Crédits ECTS</label>
        <input
          type="number"
          id="credits_ects"
          name="credits_ects"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        />
      </div>
      <button
        type="submit

