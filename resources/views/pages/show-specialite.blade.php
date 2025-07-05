@extends('layouts.admin.layout-admin')
@section('title', 'Détail Spécialité')
<section class="bg-gray-50 dark:bg-gray-900 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-xl bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4 text-blue-600">{{ $specialite->name }}</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-6">{{ $specialite->description }}</p>
        <a href="{{ route('specialite.index') }}" class="text-blue-500 hover:underline">← Retour à la liste</a>
    </div>
</section>
@section('content')
@endsection