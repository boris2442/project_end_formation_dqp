@extends('layouts.admin.layout-admin')
@section('title', 'Ajouter un niveau')
@section('content')
<section
    class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-3xl bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 md:p-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Formulaire de Gestion des Niveaux</h2>

        <form action="{{ route('niveau.store') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Nom du niveau -->
            <div>
                <label for="name" class="block text-sm font-medium mb-1">Nom du niveau</label>
                <input type="text" id="name" name="name" placeholder="Ex : Licence 1" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
            </div>

            <!-- Matricule du niveau -->
            {{-- <div>
                <label for="matricule_niveaux" class="block text-sm font-medium mb-1">Matricule du niveau</label>
                <input type="text" id="matricule_niveaux" name="matricule_niveaux" placeholder="Ex : LIC-01" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white" />
            </div> --}}




            <!-- Bouton soumettre -->
            <div class="pt-4">
                <button type="submit"
                    class="w-full sm:w-auto px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Enregistrer le niveau
                </button>
            </div>
        </form>
    </div>
</section>
@endsection