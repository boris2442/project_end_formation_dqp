@extends('layouts.admin.layout-admin')
@section('title', 'editer une Spécialité')

@section('content')
<section
    class="bg-gray-50 dark:bg-gray-900 text-blue-500 dark:text-gray-200 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-2xl bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Editer une spécialité</h2>

        <form action="{{ route('specialite.update') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Message succès -->
            @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-md">
                {{ session('success') }}
            </div>
            @endif

            <!-- Message erreur -->
            @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Nom -->
            <div>
                <label for="name" class="block text-sm font-medium mb-1">Nom de la spécialité</label>
                <input type="text" id="name" name="name" placeholder="Ex: Génie logiciel" required
                    value="{{ old('name', $specialite->name) }}"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium mb-1">Description</label>
                <textarea id="description" name="description" rows="3" placeholder="Brève description" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('name', $specialite->description) }}
</textarea>
                @error('description')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Matricule spécialité -->

            {{-- <div>
                <label for="matricule_specialite" class="block text-sm font-medium mb-1">Matricule de la
                    spécialité</label>
                <input type="text" id="matricule_specialite" name="matricule_specialite" placeholder="SP-001" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
                @error('matricule_specialite')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div> --}}

            <!-- Bouton -->
            <div class="pt-4">
                <button type="submit"
                    class="w-full sm:w-auto px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</section>
@endsection